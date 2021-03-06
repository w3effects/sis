<?php

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/login', function()
{
    return View::make('index_login');
});
Route::get('logout', function()
{
    Auth::logout();
    authSessionDestroy();
    return Redirect::to('/')->with('success_message','You Have Been Successfully Logged Out !!');
});
/*
|--------------------------------------------------------------------------
| Principal  Routes
|--------------------------------------------------------------------------
*/
Route::get('principals/login',['as'=>'principals.login','uses' => 'PrincipalsController@login']);
Route::post('principals/login','PrincipalsController@dologin');

Route::resource('principals', 'PrincipalsController',['only' => ['index','show']]);

/*
|--------------------------------------------------------------------------
| Department  Routes
|--------------------------------------------------------------------------
*/
Route::resource('departments', 'DepartmentsController',['except' => ['show']]);
/*
|--------------------------------------------------------------------------
| Hod  Routes
|--------------------------------------------------------------------------
*/
Route::get('hods/login',['as'=>'hods.login','uses' => 'HodsController@login']);
Route::post('hods/login','HodsController@dologin');
Route::resource('hods', 'HodsController');

/*
|--------------------------------------------------------------------------
| Teacher  Routes
|--------------------------------------------------------------------------
*/
Route::get('teachers/login',['as'=>'teachers.login','uses' => 'TeachersController@login']);
Route::post('teachers/login','TeachersController@dologin');
Route::resource('teachers', 'TeachersController');

/*
|--------------------------------------------------------------------------
| Subject  Routes
|--------------------------------------------------------------------------
*/
Route::resource('subjects', 'SubjectsController');
/*
|--------------------------------------------------------------------------
| Semister  Routes
|--------------------------------------------------------------------------
*/
Route::resource('semisters', 'SemistersController');