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

Route::get('/', function () {
		\LogActivity::addToLog('En la Vista Principal.');
    return view('welcome');
});

Route::get('parsear', ['uses' => 'ParseaController@parsear']);
Route::get('uuid', function(){
	\LogActivity::addToLog('En la Vista UUID.');
	$uuid = \Ramsey\Uuid\Uuid::uuid4();

	$test1 = str_replace('-', '', $uuid);

	$hora =  date('Y-m-d H:i:s');

	$test2 = md5("$test1 $hora");

	//$test = strtoupper($test2);

	return $test2;

	//return $uuid;
});

Route::get('add-to-log', 'HomeController@myTestAddToLog');
Route::get('logActivity', 'HomeController@logActivity');
Route::get('category', 'CategoryController@index');
