<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

Route::get('/visitors', 'VisitorsController@visitorInfo');
Route::get('/contact/basic', 'ContactController@contactus');
Route::get('/contact/socialmedia', 'ContactController@getSocialMedias')->name('get-social-media');
Route::get('/contact/form/department', 'ContactFormController@getDept')->name('get-contact-form-dept');
Route::get('/contact/form/issue', 'ContactFormController@getIssue')->name('get-contact-form-issue');
Route::post('/contact/form/submit', 'ContactFormController@sentMail')->name('sent-mail');

Route::get('/sliders', 'HomeSliderController@getSliders');
Route::get('/getnews', 'BreakingNewsController@newsList')->name('newslist');
Route::get('/getwelcomeinfo', 'WelcomeMessageController@getwelcomeinfo')->name('welcomeinfo');

Route::get('/getallfaculty', 'HomeFacultyController@getAllFaculty')->name('facultyinfo');
Route::get('/get-faculty-details/{link}', 'HomeFacultyController@getFacultyDetails');
Route::get('/get-faculty-tab/{faculty}', 'FacultyTabsController@getTabInfo');
Route::get('/getcampuslife', 'CampusLifeController@getCampusLife');
Route::get('/getalldepts/{id}', 'FacultyDeptController@getAllDept');
Route::get('/getdeptDetails/{id}', 'FacultyDeptController@getDeptDetails');
Route::get('/getallstaff/{id}', 'DeptStaffController@getAllStaff');
// Event
Route::get('events', 'HomeEventAPIController@index');
Route::get('event/image/{id}', 'HomeEventAPIController@getEventImage');
Route::get('event/description/{id}', 'HomeEventAPIController@getEventDescription');
Route::get('event/all', 'HomeEventAPIController@getAll');

// Latest News
Route::get('news', 'LatestNewsAPIController@index');
Route::get('news/image/{id}', 'LatestNewsAPIController@getNewsImage');
Route::get('news/description/{id}', 'LatestNewsAPIController@getNewsDescription');
Route::get('news/all', 'LatestNewsAPIController@getAll');

// Our Partners
Route::get('partners', 'OurPartnerController@getAllPartner');

// 