<?php

use Illuminate\Support\Facades\Route;

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
$proxy_url    = getenv('PROXY_URL');
$proxy_schema = getenv('PROXY_SCHEMA');

if (!empty($proxy_url)) {
   URL::forceRootUrl($proxy_url);
}

if (!empty($proxy_schema)) {
   URL::forceSchema($proxy_schema);
}

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/loginProcess', 'AdminController@loginProcess');
Route::get('/loginAdmin', 'AdminController@loginAdminView');
Route::get('/main', 'AdminController@mainView');
Route::get('/adminHome', 'AdminController@adminHomeView');
Route::get('/event', 'AdminController@eventFormView');
Route::post('/addEvent', 'AdminController@addEvent');
Route::post('/retrieveEvent', 'AdminController@retrieveEvent');

Route::get('/edit/{id}', 'AdminController@takeEventFromDb');
Route::get('/editForm', 'AdminController@editForm');
Route::get('/edit', 'AdminController@editEventView');
Route::post('/editEvent', 'AdminController@editEvent');
//Route::get('/adminEvent', 'AdminController@adminEventView');

Route::get('/delete/{id}', 'AdminController@confirmForm');
Route::get('/confirm', 'AdminController@confirmForm');
Route::post('/deleteEvent', 'AdminController@deleteEvent');
?>
