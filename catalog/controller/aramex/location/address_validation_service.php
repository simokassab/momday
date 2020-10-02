<?php
class ControllerAramexLocationAddressValidationService extends Controller {
	public function index($params) {
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
			'Address' => array(
				'Line1'			=> $params['address_line_1'],
				'Line2'			=> $params['address_line_2'],
				'Line3'			=> '',
				'City'			=> $params['city'],
				'CountryCode'	=> $params['country_code']							 
			)
		);

		// calling the method and printing results
		try {
			$auth_call = json_decode(json_encode($soapClient->ValidateAddress($params)), True);
			return $auth_call;
		} catch (SoapFault $fault) {
			die('Error : ' . $fault->faultstring);
		}
	}
}
?>