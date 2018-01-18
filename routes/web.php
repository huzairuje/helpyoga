<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['middleware'=>'guest'],function(){
	Route::get('/', ['as'=>'frontend','uses'=>'FrontEndController@index']);
	// Route::redirect('/', '/login', 301);
	Route::get('/register', [
		'as' => 'register',
		'uses' => 'SentinelAuth\RegisterController@getRegister'
	]);

	Route::get('/login', [
		'as' => 'login',
		'uses' => 'SentinelAuth\LoginController@getLogin'
	]);

	Route::post('/login', [
		'as' => 'login',
		'uses' => 'SentinelAuth\LoginController@postLogin'
	]);

	Route::get('/forgot-password', [
		'as' => 'password.request',
		'uses' => 'SentinelAuth\LoginController@getLogin'
	]);
});
	Route::get('/dashboard', ['as'=>'dashboard','uses'=>'DashboardController@index']);
	Route::get('/elements', ['as'=>'elements','uses'=>'ElementController@index']);
	Route::get('/charts', ['as'=>'charts','uses'=>'ChartsController@index']);
	Route::get('/panels', ['as'=>'panels','uses'=>'PanelsController@index']);
	Route::get('/profile', ['as'=>'profile','uses'=>'ProfileController@index']);
	Route::get('/notification', ['as'=>'notification','uses'=>'NotificationController@index']);
	Route::get('/tables', ['as'=>'tables','uses'=>'TablesController@index']);
	Route::get('/typography', ['as'=>'typography','uses'=>'TypographyController@index']);
	Route::get('/icons', ['as'=>'icons','uses'=>'IconsController@index']);
Route::group(['middleware'=>'admin'],function(){

});
