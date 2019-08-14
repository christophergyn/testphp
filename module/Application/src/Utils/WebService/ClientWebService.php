<?php
namespace Application\Utils\WebService;

use Application\Utils\WebService\MagentoService;
use Zend\Soap\Client;
	
class ClientWebService extends Client{
	const URL = 'http://serveronix:8080/magento/api/soap/?wsdl';
	const URL_XMLRPC = 'http://serveronix:8080/magento/api/xmlrpc/';
	const USER_NAME = 'tony';
	const API_KEY = 'Onix@1';
	
	public function login2($username, $apiKey){
		$sessionId = '';
		try {
			$sessionId = $this->call('login', $username, $apiKey);
		} catch (Exception $e) {
			var_dump($e);
		}
		var_dump($sessionId);
	}
	
	
	public function login(){
		$sessionID = '';
		try {
			$magentoService = new MagentoService(ClientWebService::URL, array(
        		'wsdl_cache' => 0,
        		'trace' => 1,
				'soap_version' => SOAP_1_2,
    		));
 			$sessionID = $magentoService->login(ClientWebService::USER_NAME, ClientWebService::API_KEY);
		} catch (\Exception $e){
			var_dump($e);
		}
		var_dump($sessionID);
	}	

	public function startSession(){
		$magentoService = new MagentoService(ClientWebService::URL);
		try {
 			$sessionID = $magentoService->startSession();
		} catch (\Exception $e){
			$sessionID = $e;
		}
		
		var_dump($sessionID);
	}	
}