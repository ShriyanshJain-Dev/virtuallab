<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;
use Session;
use SphereEngine\Api\CompilersClientV3;
include(app_path().'/API/autoload.php');
class StudentController extends Controller
{	
    public function LabUploadPage(){
    	return view('createlab')->with('lab',App\Lab::pluck('Lab_name','Lab_id'));
    }
	public function SucessFull(Request $request){
				//dd(Session::get('facultyId')); 
		try{   
            $insert = array(    
							'Faculty_id'=>1,
							 'Lab_name'=>$request->lab,     
                             'Semester'=>$request->sem,
							 'compiler_name'=>$request->compiler, 
                             'About'=>$request->about, 
							 );
            App\Lab::insert($insert);
           Session::flash('status','Sucessfully Create Lab');  
            return redirect()->route('createlab');
        }
        catch(Exception $e){
            Session::flash('status','UnSucessfull Create Lab Please try Again!!!');
            return redirect()->route('createlab');   
        }
    }
     public function AjaxTable(Request $request){ 
		$data = App\Lab::get(['Lab_id','Semester', 'Lab_name','compiler_name','About']);
		$i = 0;
		$compilers=$this->getCompiler();
		
		foreach ($data as $key => $value) {   
			 $json['data'][$i][0]=$i+1;
			 $json['data'][$i][1]='<input type="text" class="form-control" method="post" style=width:50px;background-color:white value='.$value->Semester.'  id='."Semester".$value->Lab_id.' disabled/>';
			 $json['data'][$i][2]='<input type="text" class="form-control" method="post" style=background-color:white value="'.$value->Lab_name.'" id='."Lab_name".$value->Lab_id.' disabled/>';
			 $json['data'][$i][3]='<input type="text"  class="form-control"method="post" style=background-color:white value='.$compilers[$value->compiler_name].' id='."compiler".$value->Lab_id.' disabled/>';
			 $json['data'][$i][4]='<input type="text" class="form-control" method="post" style=background-color:white value="'.$value->About.'" id='."About".$value->Lab_id.' disabled/>';
			 $json['data'][$i][5]='<input type="button"  id='."button".$value->Lab_id.' class="btn btn-info" onclick="EditButton('.$value->Lab_id.')" value="Edit">';
			 $json['data'][$i][6]='<input type="button" class="btn btn-info" onclick="DeleteLab('.$value->Lab_id.')" value="Delete">';
			 $i++;
		 }
		 return json_encode($json);
    } 

	
	public function AjaxEditLab(Request $request){
		$updatedata= array(
                    'Lab_name'=>$request->Lab_name, 
                    'Semester'=>$request->Semester, 
                    'About'=>$request->About, 
            );
		$data = App\Lab::where('Lab_id',$request->Lab_id)
                                ->update($updatedata);        
		return $data;
	}
	public function AjaxDeleteLab(Request $request){
			$data=App\Lab::where('Lab_id',$request->Lab_id)
    						->delete();
		return $data;
	
	}
	public function Getexperiment(){
    	return view('createexperiment')->with('lab',App\Lab::pluck('Lab_name','Lab_id'));
    }
	public function CreateLabView(){
		$compilers=$this->getCompiler();
		return view('createlab')->with('Compiler',$compilers);
	}
	public function getCompiler(){
		$accessToken = 'b99f1c8dd2fb5707fd96f29318608a09';
		$endpoint = 'http://00acb330.compilers.sphere-engine.com';

		// initialization
		$client = new CompilersClientV3($accessToken, $endpoint);

		// API usage
		$response = $client->getCompilers();
		foreach($response['items'] as $key =>$value){
			$compilers[$value['id']]=$value['short'];
		}
		return $compilers;
	}
	public function SucessFullexperiment(Request $request){
	  /*
		$file = $request->file('file');
		 $destinationPath=base_path().'/storage/uploads';
		 $sourcePath=md5($file->getClientOriginalName());   */
		// dd($destinationPath);
		try{
			//$file->move($destinationPath,$sourcePath);
			$insert = array(
							 'Lab_id'=>$request->lab,
							 'Exp_Name'=>$request->experiment,     
							 'Algorithm'=>$request->algorithm, 
							); 
			App\Experiment::insert($insert);	
		   Session::flash('status','Sucessfully Create Experiment');
			return redirect()->route('createexperiment');
		}
		catch(Exception $e){
			Session::flash('status','UnSucessfull Create Experiment Please try Again!!!');
			return redirect()->route('createexperiment');   
		}
	}
	
	 public function ExperimentAjaxTable(Request $request){
		// dd(Session::get('facultyId')); 
		$parms= ['faculty_id'=>Session::get('facultyId')];
        $data = App\Experiment::join('labs','labs.Lab_id','=','experiments.Lab_id')
								->where($parms)
								->get(['labs.Lab_id','Exp_Name','Lab_name','Exp_id']);
				//dd($data);  
       $i = 0;
       foreach ($data as $key => $value) {
             $json['data'][$i][0]=$i+1;
             $json['data'][$i][1]='<input type="text"  class="form-control" method="post" style=width:200px;background-color:white value="'.$value->Lab_name.'" id='."lab".$value->Lab_id.' disabled />';
             $json['data'][$i][2]='<input type="text" class="form-control"  method="post" style=width:200px;background-color:white value="'.$value->Exp_Name.'" id='."Exp".$value->Lab_id.' disabled />';
             $json['data'][$i][3]='<input type="button" class="btn btn-info" onclick="DeleteExperiment('.$value->Lab_id.')" value="Delete">';
             $i++;
         }  
         return json_encode($json);
    } 
	public function AjaxDeleteExperiment(Request $request){
			$data=App\Experiment::where('Lab_id',$request->Lab_id)
    						->delete(); 
		return $data;
	
	}

   
}
