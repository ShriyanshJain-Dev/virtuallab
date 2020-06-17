<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App;
use Session;
use Socialite;
class LoginController extends Controller
{

    public function Auth(Request $request=null){
		if(session('FLAG')==1){
			$insert=array('student_id'=>session('USERDATA')->id,
    						'student_email'=>session('USERDATA')->email,
							'student_name'=>session('USERDATA')->user['name']['givenName'],
					);
    		App\Student::insert($insert);
    		return redirect()->route('viewlab');
		}
		else if(session('FLAG')==2){
			$parms=['faculty_email'=>session('USERDATA')->email];
			$data=App\Faculty::where($parms)
								->get(['faculty_id']);
			Session::put('facultyId',$data[0]->faculty_id);
			
			return redirect()->route('createexperiment');
		}
		else if(session('FLAG')==3){
			$parms=['admin_email'=>session('USERDATA')->email];
			$data=App\Admin::where($parms)
                        ->selectRaw('COUNT(*) as count')
                        ->get(); 
			if($data[0]->count==1){
				return  redirect()->route('createlab');	
			}
			else{
				Session::flash('status','Wrong Credentials!!!');
				return redirect()->route('home');  
			}
		}
        
        
    }
	public function authLevel($id){
		if($id==1){
			Session::put('FLAG',1);
		}
		else if($id==2){
			Session::put('FLAG',2);
		}
		else if($id==3){
			Session::put('FLAG',3);
		}
		return redirect()->route('gmail');
	}
    public function redirectToGoogle(){
         return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(){
          $user = Socialite::driver('google')->user();
          Session::put('USERDATA',$user);
          return redirect()->route('Aftercallback');
    }
    public function afterGoogleCallback(){
        $user=session('USERDATA');
        return $this->Auth();
    }
    public function Logout(){
        Session::flush();
        return redirect()->route('home');
    }   
}
