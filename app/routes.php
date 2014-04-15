<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

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
Route::get('hods/login',['as'=>'hods.login','uses' => 'HodsController@login']);
Route::post('hods/login','HodsController@dologin');
Route::resource('hods', 'HodsController');

/*
|--------------------------------------------------------------------------
| Teacher  Routes
|--------------------------------------------------------------------------
*/
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