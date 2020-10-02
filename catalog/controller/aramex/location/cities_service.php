<?php
class ControllerAramexLocationCitiesService extends Controller {
	public function index() {
		$soapClient = new SoapClient('catalog/controller/aramex/location/Location-API-WSDL.wsdl');		
		
		$params = array(
			'ClientInfo' => array(
				'AccountCountryCode' => 'JO',
				'AccountEntity' => 'AMM',
				'AccountNumber' => '20016',
				'AccountPin' => '331421',
				'UserName' => 'testingapi@aramex.com',
				'Password' => 'R123456789$r',
				'Version' => 'v1.0',
				'Source' => NULL			
			),

			'Transaction' => array(
				'Reference1' => '001',
				'Reference2' => '002',
				'Reference3' => '003',
				'Reference4' => '004',
				'Reference5' => '005'
			),
			'CountryCode' => 'LB',
			'State'	=> NULL,
			'NameStartsWith' => NULL
		);
	
		// calling the method and printing results
		try {
			$auth_call = json_decode(json_encode($soapClient->FetchCities($params)), True);
			return $auth_call['Cities']['string'];
		} catch (SoapFault $fault) {
			die('Error : ' . $fault->faultstring);
		}
	}
}
?>