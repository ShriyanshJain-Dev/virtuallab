<?php
namespace App\Http\Controllers;

use SphereEngine\Api\CompilersClientV3;
include(app_path().'/API/autoload.php');
use SphereEngine\Api\ProblemsClientV3;
use SphereEngine\Api\SphereEngineResponseException;

class ApiController extends Controller{
	private  $accessToken;
	private $endpoint;
		
	function __construct(){
		$this->accessToken = 'b99f1c8dd2fb5707fd96f29318608a09';
		$this->endpoint = 'http://00acb330.compilers.sphere-engine.com';
	}
	
	public function getAccessToken(){
		 $token=$this->accessToken;
		
		return $token; 
		
	}
	
	public function getEndPoint(){
		$url=$this->endpoint;
		return $url;
	}

}