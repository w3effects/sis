<?php
Event::listen('illuminate.query',function($q){
   //var_dump($q);
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function()
{
	dd(Auth::guest());
});

Route::get('logout', function()
{
    return Redirect::to('/')->with('success_message','You Have Been Successfully Logged Out !!');
});
/*
|--------------------------------------------------------------------------
| Principal  Routes
|--------------------------------------------------------------------------
*/
Route::get('principals/login',['as'=>'principals.login','uses' => 'PrincipalsController@login']);
Route::post('principals/login','PrincipalsController@dologin');

Route::resource('principals', 'PrincipalsController');

/*
|--------------------------------------------------------------------------
| Department  Routes
|--------------------------------------------------------------------------
*/
Route::resource('departments', 'DepartmentsController');
/*
|--------------------------------------------------------------------------
| Hod  Routes
|--------------------------------------------------------------------------
*/
Route::resource('hods', 'HodsController');