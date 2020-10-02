<?php
error_reporting(E_ALL & ~E_NOTICE);
/**
 * @author     Opencart-api.com
 * @copyright  2017
 * @license    License.txt
 * @version    2.0
 * @link       https://opencart-api.com/product/shopping-cart-rest-api/
 * @documentations https://opencart-api.com/opencart-rest-api-documentations/
 */
abstract class RestController extends Controller
{
    public $statusCode = 200;
    public $post = array();
    public $allowedHeaders = array("GET", "POST", "PUT", "DELETE");
    public $accessControlAllowHeaders = array("Content-Type", "Authorization", "X-Requested-With", "X-Oc-Merchant-Id",
            "X-Oc-Merchant-Language", "X-Oc-Currency", "X-Oc-Image-Dimension", "X-Oc-Store-Id", "X-Oc-Session", "X-Oc-Include-Meta");
    public $json = array("success" => 1, "error" => array(), "data" => array());

    public $multilang = 0;
    public $opencartVersion = "";
    public $urlPrefix = "";
    public $includeMeta = true;

    private $httpVersion = "HTTP/1.1";

    private $enableLogging = 0;

    public function checkPlugin()
    {

        /*check rest api is enabled*/
        $rest_api_licensed_on = $this->config->get('module_shopping_cart_rest_api_licensed_on');
        if (!$this->config->get('module_shopping_cart_rest_api_status') || empty($rest_api_licensed_on)) {
            $this->json["error"][] = 'Shopping Cart Rest API is disabled. Enable it!';
            $this->statusCode = 403;
            $this->sendResponse();
        }

        if (!$this->ipValidation()) {
            $this->statusCode = 403;
            $this->sendResponse();
        }

        $this->opencartVersion = str_replace(".", "", VERSION);
        $this->urlPrefix = $this->request->server['HTTPS'] ? HTTPS_SERVER : HTTP_SERVER;

        $this->setSystemParameters();
    }

    public function sendResponse()
    {

        $statusMessage = $this->getHttpStatusMessage($this->statusCode);

        //fix missing allowed OPTIONS header
        $this->allowedHeaders[] = "OPTIONS";

        if ($this->statusCode != 200) {
            if (!isset($this->json["error"])) {
                $this->json["error"][] = $statusMessage;
            }

            if ($this->statusCode == 405 && $_SERVER['REQUEST_METHOD'] !== 'OPTIONS') {
                $this->response->addHeader('Allow: ' . implode(",", $this->allowedHeaders));
            }

            $this->json["success"] = 0;

            //enable OPTIONS header
            if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
                $this->statusCode = 200;
                $this->json["success"] = 1;
                $this->json["error"] = array();
            }

        } else {

            if (!empty($this->json["error"])) {
                $this->statusCode = 400;
                $this->json["success"] = 0;
            }
            //add cart errors to the response
            if (isset($this->json["cart_error"]) && !empty($this->json["cart_error"])) {
                $this->json["error"] = $this->json["cart_error"];
                unset($this->json["cart_error"]);
            }
        }

        $this->json["error"] = array_values($this->json["error"]);

        if (isset($this->request->server['HTTP_ORIGIN'])) {
            $this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
            $this->response->addHeader('Access-Control-Allow-Methods: '. implode(", ", $this->allowedHeaders));
            $this->response->addHeader('Access-Control-Allow-Headers: '. implode(", ", $this->accessControlAllowHeaders));
            $this->response->addHeader('Access-Control-Allow-Credentials: true');
        }

        $this->response->addHeader($this->httpVersion . " " . $this->statusCode . " " . $statusMessage);
        $this->response->addHeader('Content-Type: application/json; charset=utf-8');


        /*check logging is enabled or not*/
        if ($this->config->get('module_shopping_cart_rest_api_enable_logging')) {
            $this->enableLogging = (int)$this->config->get('module_shopping_cart_rest_api_enable_logging');
        }

        if ($this->enableLogging) {
            //Log request info
            $now = new DateTime('now');
            $now->format('Y-m-d H:i:s');

            $clientIp = self::getClientIp();
            if(filter_var($clientIp, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
                $clientIp = $this->convertIp($clientIp);
            }
            $headers = $this->getRequestHeaders();
            $this->APILogger(
                array(
                    'request_created' => $now,
                    'request_method' => $_SERVER['REQUEST_METHOD'],
                    'api_endpoint' => (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",
                    'ip' => $clientIp,
                    'request_params' => $this->post,
                    'request_headers' => $headers,
                    'response_code' => $this->statusCode,
                    'response' => $this->json,
                )
            );
        }

        if (defined('JSON_UNESCAPED_UNICODE')) {
            $this->response->setOutput(json_encode($this->json, JSON_UNESCAPED_UNICODE));
        } else {
            $this->response->setOutput($this->rawJsonEncode($this->json));
        }

        $this->response->output();

        die;
    }

    public function getHttpStatusMessage($statusCode)
    {
        $httpStatus = array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed'
        );

        return ($httpStatus[$statusCode]) ? $httpStatus[$statusCode] : $httpStatus[500];
    }

    private function rawJsonEncode($input, $flags = 0)
    {
        $fails = implode('|', array_filter(array(
            '\\\\',
            $flags & JSON_HEX_TAG ? 'u003[CE]' : '',
            $flags & JSON_HEX_AMP ? 'u0026' : '',
            $flags & JSON_HEX_APOS ? 'u0027' : '',
            $flags & JSON_HEX_QUOT ? 'u0022' : '',
        )));
        $pattern = "/\\\\(?:(?:$fails)(*SKIP)(*FAIL)|u([0-9a-fA-F]{4}))/";
        $callback = function ($m) {
            return html_entity_decode("&#x$m[1];", ENT_QUOTES, 'UTF-8');
        };
        return preg_replace_callback($pattern, $callback, json_encode($input, $flags));
    }

    private function setSystemParameters()
    {

        $headers = $this->getRequestHeaders();

        $key = "";

        //set api key
        if (isset($headers['x-oc-merchant-id'])) {
            $key = $headers['x-oc-merchant-id'];
        }

        /*validate api security key*/
        if ($this->config->get('module_shopping_cart_rest_api_key') && ($key != $this->config->get('module_shopping_cart_rest_api_key'))) {
            $this->json["error"][] = 'Invalid or missing secret key';
            $this->statusCode = 403;
            $this->sendResponse();
        }


        //set currency
        if (isset($headers['x-oc-currency'])) {
            $currency = $headers['x-oc-currency'];
            if (!empty($currency)) {
                $this->currency->setRestCurrencyCode($currency);
                $this->session->data['currency'] = $currency;
            } else {
                $this->currency->setRestCurrencyCode($this->session->data['currency']);
            }
        } else {
            $this->currency->setRestCurrencyCode($this->session->data['currency']);
        }


        //show meta information in the response
//        if (isset($headers['x-oc-include-meta'])) {
//            $this->includeMeta = true;
//        }

        //set store ID
        if (isset($headers['x-oc-store-id'])) {
            $this->config->set('config_store_id', $headers['x-oc-store-id']);
        }

        $this->load->model('localisation/language');
        $allLanguages = $this->model_localisation_language->getLanguages();

        if (count($allLanguages) > 1) {
            $this->multilang = 1;
        }

        //set language
        if (isset($headers['x-oc-merchant-language'])) {
            $osc_lang = $headers['x-oc-merchant-language'];

            $languages = array();
            $this->load->model('localisation/language');
            $all = $this->model_localisation_language->getLanguages();

            foreach ($all as $result) {
                $languages[$result['code']] = $result;
            }

            if (isset($languages[$osc_lang])) {
                $this->session->data['language'] = $osc_lang;
                $this->config->set('config_language', $osc_lang);
                $this->config->set('config_language_id', $languages[$osc_lang]['language_id']);

                if (isset($languages[$osc_lang]['directory']) && !empty($languages[$osc_lang]['directory'])) {
                    $directory = $languages[$osc_lang]['directory'];
                } else {
                    $directory = $languages[$osc_lang]['code'];
                }

                $language = new \Language($directory);
                $language->load($directory);
                $this->registry->set('language', $language);
            }
        }

        if (isset($headers['x-oc-image-dimension'])) {
            $d = $headers['x-oc-image-dimension'];
            $d = explode('x', $d);
            $this->config->set('config_shopping_cart_rest_api_image_width', $d[0]);
            $this->config->set('config_shopping_cart_rest_api_image_height', $d[1]);
        } else {
            $this->config->set('config_shopping_cart_rest_api_image_width', 500);
            $this->config->set('config_shopping_cart_rest_api_image_height', 500);
        }
    }

    private function getRequestHeaders()
    {
        $arh = array();
        $rx_http = '/\AHTTP_/';

        foreach ($_SERVER as $key => $val) {
            if (preg_match($rx_http, $key)) {
                $arh_key = preg_replace($rx_http, '', $key);

                $rx_matches = explode('_', $arh_key);

                if (count($rx_matches) > 0 and strlen($arh_key) > 2) {
                    foreach ($rx_matches as $ak_key => $ak_val) {
                        $rx_matches[$ak_key] = ucfirst($ak_val);
                    }

                    $arh_key = implode('-', $rx_matches);
                }

                $arh[strtolower($arh_key)] = $val;
            }
        }

        return ($arh);

    }

    public function getPost()
    {
        $input = file_get_contents('php://input');
        $post = json_decode($input, true);

        if (!is_array($post) || empty($post)) {
            $this->statusCode = 400;
            $this->json['error'][] = 'Invalid request body, please validate the json object';
            $this->sendResponse();
        }

        $request = new Request();
        $post = $request->clean($post);

        $this->post = $post;

        return $post;
    }

    public function returnDeprecated()
    {
        $this->statusCode = 400;
        $this->json['error'] = "This service has been removed for security reasons.Please contact us for more information.";

        return $this->sendResponse();
    }


    private function ipValidation()
    {
        $allowedIPs = $this->config->get('module_shopping_cart_rest_api_allowed_ip');

        if (!empty($allowedIPs)) {
            $ips = explode(",", $allowedIPs);

            $ips = array_map(
                function ($ip) {
                    return trim($ip);
                },
                $ips
            );

            if (!in_array($_SERVER['REMOTE_ADDR'], $ips)
                || (isset($_SERVER["HTTP_X_FORWARDED_FOR"]) && !in_array($_SERVER["HTTP_X_FORWARDED_FOR"], $ips))
            ) {
                return false;
            } else {
                return true;
            }
        }
        return true;
    }


    private function rmkdir($path, $mode = 0777)
    {

        if (!file_exists($path)) {
            $path = rtrim(preg_replace(array("/\\\\/", "/\/{2,}/"), "/", $path), "/");
            $e = explode("/", ltrim($path, "/"));
            if (substr($path, 0, 1) == "/") {
                $e[0] = "/" . $e[0];
            }
            $c = count($e);
            $cp = $e[0];
            for ($i = 1; $i < $c; $i++) {
                if (!is_dir($cp) && !@mkdir($cp, $mode)) {
                    return false;
                }
                $cp .= "/" . $e[$i];
            }
            return @mkdir($path, $mode);
        }

        if (is_writable($path)) {
            return true;
        } else {
            return false;
        }
    }

    private function APILogger($data){

        $year = date("Y");
        $month = date("m");
        $day = date("d");

        //The folder path for our file should be YYYY/MM/DD
        $directory = DIR_LOGS."shopping-cart-api-log/".$year."/".$month."/".$day."/";

        $file = $year.$month.$day.".log";

        $dirOk = $this->rmkdir($directory);

        if($dirOk && file_exists($directory)) {
            file_put_contents($directory.$file, PHP_EOL .json_encode($data), FILE_APPEND);
        }
    }

    public static function getClientIp()
    {

        if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            return $_SERVER['HTTP_CF_CONNECTING_IP'];
        } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (
            strtolower($_SERVER['HTTP_HOST']) == 'localhost' ||
            strtolower($_SERVER['SERVER_NAME']) == 'localhost' ||
            $_SERVER['REMOTE_ADDR'] == '::1'
        ) {
            return sprintf(
                '%s.%s.%s.%s',
                rand(1, 255), rand(1, 255), rand(1, 255), rand(1, 255)
            );
        }

        return $_SERVER['REMOTE_ADDR'];
    }

    public function convertIp($ip = null)
    {
        $ip6 = self::parseIp6($ip);
        $ip4 = ($ip6[6] >> 8) . '.' . ($ip6[6] & 0xff) . '.' . ($ip6[7] >> 8) . '.' . ($ip6[7] & 0xff);
        if (!filter_var($ip4, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) || $ip4 === "0.0.0.0")
        {
            return sprintf(
                '%s.%s.%s.%s', rand(1, 255), rand(1, 255), rand(1, 255), rand(1, 255)
            );
        }
        return $ip4;
    }

    public static function parseIp6($str)
    {
        for ($i = 0; $i < 8; $i++)
        {
            $ar[$i] = 0;
        }

        if ($str == "::")
        {
            return $ar;
        }

        $sar = explode(':', $str);
        $slen = count($sar);
        if ($slen > 8)
        {
            $slen = 8;
        }

        $j = 0;
        for ($i = 0; $i < $slen; $i++)
        {
            if ($i && $sar[$i] == "")
            {
                $j = 9 - $slen + $i;
                continue;
            }
            $ar[$j] = hexdec('0x' . $sar[$i]);
            $j++;
        }
        return $ar;
    }

}