<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('index');
});

Route::get('/Admin', function () {
    return view('home');
})->name('home');

Route::get('authLevel/{id}', [
	'uses'=>'LoginController@authLevel',
	'as'=>'authLevel',
]);
Route::get('auth/google', 'LoginController@redirectToGoogle')->name('gmail');

Route::get('auth/google/callback', 'LoginController@handleGoogleCallback');

Route::get('auth/google/Aftercallback', 'LoginController@afterGoogleCallback')->name('Aftercallback');
Route::get('/logout', 'LoginController@Logout');


Route::post('/Auth', [
	'uses'=>'LoginController@Auth',
	'as'=>'Authentication',
]);

Route::get('/upload', [
	'uses'=>'StudentController@LabUploadPage',
	'as'=>'upload',
]);

Route::get('viewLab',function(){
	return view('viewlab'); 
	})->name('viewlab');

Route::get('createlab', [
	'uses'=>'StudentController@CreateLabView',
	'as'=>'createlab',
]);
Route::post('/SucessFull',[
	'uses'=>'StudentController@SucessFull',
	'as'=>'SucessFull'
]);   
Route::get('/ViewInformation',function(){
	return view('firstdatatable'); 
});
Route::get('AjaxTable',[
	'uses'=>'StudentController@AjaxTable',
	'as'=>'AjaxTable'
]);

Route::post('/AjaxEditLab',[
	'uses'=>'StudentController@AjaxEditLab',
	'as'=>'AjaxEditLab'
]);
Route::get('/Lab_Table',[
	'uses'=>'LabController@LabInfo',
	'as'=>'Lab_Table',
]);
Route::get('/Ajax_st_Table',[
	'uses'=>'LabController@Ajax_st_Table',
	'as'=>'Ajax_st_Table',
]);
Route::get('/Lab_Details/{id}',[
	'uses'=>'LabController@Lab_Details',
	'as'=>'Lab_Details',
]);
Route::post('/AjaxDeleteLab',[
	'uses'=>'StudentController@AjaxDeleteLab',
	'as'=>'AjaxDeleteLab'
]);
Route::get('AjaxTableExperiment',[
	'uses'=>'StudentController@AjaxTableExperiment',
	'as'=>'AjaxTableExperiment'
]);

Route::get('/Exp_Details/{Exp_id}/{compiler_name}',[
	'uses'=>'LabController@Exp_Details', 
	'as'=>'Exp_Details',
]); 
Route::get('Ajax_Exp_Table',[
	'uses'=>'LabController@Ajax_Exp_Table',
	'as'=>'Ajax_Exp_Table'
]);
Route::get('/createexperiment',[
	'uses'=>'StudentController@Getexperiment',
	'as'=>'createexperiment'
]);
Route::post('/SucessFullexperiment',[
	'uses'=>'StudentController@SucessFullexperiment',
	'as'=>'SucessFullexperiment'
]); 
Route::get('ExperimentAjaxTable',[
	'uses'=>'StudentController@ExperimentAjaxTable',
	'as'=>'ExperimentAjaxTable'
]); 
Route::post('/AjaxDeleteExperiment',[
	'uses'=>'StudentController@AjaxDeleteExperiment',   
	'as'=>'AjaxDeleteExperiment'
]); 
Route::post('/AjaxSubmitCode',[
		'uses'=>'LabController@AjaxSubmitCode',   
		'as'=>'AjaxSubmitCode'
]);
	 

