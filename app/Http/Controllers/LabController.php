<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ApiController;
use App;
use File;
use SphereEngine\Api\CompilersClientV3;
include(app_path().'/API/autoload.php');
use SphereEngine\Api\SphereEngineResponseException;

class LabController extends Controller
{
    public function LabInfo(){
    	return view('data_table');
    }
     public function Ajax_st_Table(Request $request){
    	$data=App\Lab::get(['Lab_id','Lab_name', 'Semester','About']);
    	$i=0;
    	foreach ($data as $key => $value) {
    		$json['data'][$i][0]=$i+1;
			$json['data'][$i][1]=$value->Lab_name;
			$json['data'][$i][2]=$value->Semester;
			$json['data'][$i][3]='<a href="'.route('Lab_Details',$value->Lab_id).'" class="link">View Details</a>';
			$i++;
    	}
    	return json_encode($json);
     }
	
	 public function Lab_Details($request){
		 
		$about=App\Lab::where('Lab_id',$request)
						->get(['About','compiler_name']);
		$data=App\Experiment::where('Lab_id',$request)
						->get(['Exp_id','Exp_Name']);
						
    	return view('exp_info')->withData($data)->withId($request)->withAbout($about);
    } 
	 public function Ajax_Exp_Table(Request $request){
		 //dd($request);
    	
     }
	  public function Exp_Details($Exp_id,$compiler_name){ 
		  /*
		  $url=File::get(storage_path('uploads/helloworld.txt'));
    	return view('Exp')->withFile($url);
			*/
		$data=App\Experiment::where('Exp_id',$Exp_id)
							->get(['Exp_id','Exp_Name','Algorithm']);
							
		return view('Exp')->withData($data)
						->withId($Exp_id)
						->withcompiler_id($compiler_name);
	} 
	public function AjaxSubmitCode(Request $request){
	// initialization 
	
	$obj=new ApiController();
	$accessToken = $obj->getAccessToken();
	$endpoint = $obj->getEndPoint();
	 
	$client = new CompilersClientV3($accessToken, $endpoint);  
	// API usage
	
	$source = $request->code;
	$compiler = $request->compiler_id; 
	$input = $request->input;
		

	
	$response = $client->createSubmission($source, $compiler, $input);
	sleep(3);
	 
	$response1 = $client->getSubmission($response['id'],1,1,1,1,1);
	//dd($response1); 
	$dataArray['source']=$response1['source'];
	$dataArray['input']=$response1['input'];
	$dataArray['output']=$response1['output'];
	$dataArray['compiler_id']=$compiler;
	return $dataArray;
		
	}
	
	
}
