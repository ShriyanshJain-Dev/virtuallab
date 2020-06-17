<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App;
use Session;

class Example extends Controller
{
 	public function logic(Request $request){
 		$parms=['username'=>$request->username,'password'=>md5($request->password)];
 		$data = App\Admin::where($parms)
 							->selectRaw('COUNT(*) as count')
 							->get();
 		if($data[0]->count ==1){
 			return view('success');
 		}
 		else{
 			Session::flash('status','Wrong Entries');
 			return redirect()->back();
 		}
 	}  
}
