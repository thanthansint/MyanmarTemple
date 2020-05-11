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

Route::get('/editingEvent/{id}', 'AdminController@takeEventFromDb');
Route::get('/editForm', 'AdminController@editForm');
Route::get('/editEvventView', 'AdminController@editEventView');
Route::post('/editEvent', 'AdminController@editEvent');

Route::get('/deletingEvent/{id}', 'AdminController@confirmEventForm');
Route::get('/confirmEventForm', 'AdminController@confirmEventForm');
Route::post('/deleteEvent', 'AdminController@deleteEvent');

Route::get('/announcement', 'AdminController@announcementFormView');
Route::post('/addAnnouncement', 'AdminController@addAnnouncement');

Route::post('/retrieveAnnouncement', 'AdminController@retrieveAnnouncement');
Route::get('/editingAnnouncement/{id}', 'AdminController@takeAnnouncementFromDb');
Route::get('/editAnnouncementForm', 'AdminController@editAnnouncementForm');
Route::get('/editAnnouncementView', 'AdminController@editAnnouncementView');
Route::post('/editAnnouncement', 'AdminController@editAnnouncement');

Route::post('/userRetrieveAnnouncement', 'UserController@userRetrieveAnnouncement');

Route::get('/deletingAnnouncement/{id}', 'AdminController@confirmAnnouncementForm');
Route::get('/confirmAnnouncementForm', 'AdminController@confirmAnnouncementForm');
Route::post('/deleteAnnouncement', 'AdminController@deleteAnnouncement');

Route::get('/userAbout', 'UserController@userAboutView');
Route::get('/userEvent', 'UserController@userEventView');
Route::get('/userAnnouncement', 'UserController@userAnnouncementView');

Route::post('/getForInteresting', 'UserController@getForInteresting');
Route::post('/interestedCountPlus', 'UserController@interestedCountPlus');
Route::post('/interestedCountMinus', 'UserController@interestedCountMinus');

Route::post('/getForGoing', 'UserController@getForGoing');
Route::post('/goingCountPlus', 'UserController@goingCountPlus');
Route::post('/goingCountMinus', 'UserController@goingCountMinus');

?>
