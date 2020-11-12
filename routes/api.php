<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

});

Route::get('/contact/basic', 'ContactController@contactus');
Route::get('/contact/socialmedia', 'ContactController@getSocialMedias')->name('get-social-media');
Route::get('/contact/form/department', 'ContactFormController@getDept')->name('get-contact-form-dept');
Route::get('/contact/form/issue', 'ContactFormController@getIssue')->name('get-contact-form-issue');
Route::post('/contact/form/submit', 'ContactFormController@sentMail')->name('sent-mail');

Route::get('/sliders', 'HomeSliderController@getSliders');
Route::get('/getnews', 'BreakingNewsController@newsList')->name('newslist');
Route::get('/getwelcomeinfo', 'WelcomeMessageController@getwelcomeinfo')->name('welcomeinfo');
Route::get('/getallfaculty', 'HomeFacultyController@getAllFaculty')->name('facultyinfo');