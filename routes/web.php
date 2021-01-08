<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;

Route::get('/', function(){
    $refreshButtonPressed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
    $ip = Request::ip();
    $date = date('Y-m-d H:i:s');
    $location_details = Location::get('37.111.226.32');
    //if(!$refreshButtonPressed) 
    {
        DB::table('visitors_information')->insert([
            'ip' => $ip,
            'country' => 'Bangladesh',
            'state' => 'Dhaka',
            'postCode' => 6680,
            'isOnline' => 1,
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
    return view('welcome');
});

// Route::get('/{any?}', function () {
//     return view('welcome');
// })->where('any', '^(?!admin).*$');

Route::get('/visitors/info', 'VisitorsController@storeLeaveTime')->name('visitor-leave-time');

Route::redirect('/admin', 'admin/home');

Auth::routes(['register' => false]);

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');



Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::delete('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'Admin\RolesController');
    Route::delete('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    Route::resource('users', 'Admin\UsersController');
    Route::delete('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');

    Route::resource('slider', 'HomeSliderController');
    Route::resource('breakingnews', 'BreakingNewsController');
    Route::resource('contact', 'ContactController');
    Route::resource('welcomemessage', 'WelcomeMessageController');
    Route::resource('faculty', 'HomeFacultyController');
    Route::resource('faculty_tabs', 'FacultyTabsController');
    Route::resource('department', 'FacultyDeptController');
    Route::resource('staff', 'DeptStaffController');
    Route::delete('staff_mass_destroy', 'DeptStaffController@massDestroy')->name('staff.mass_destroy');
    Route::post('/dept/update', 'FacultyDeptController@updatedept');
    Route::resource('events', 'HomeEventsController');
    Route::get('/event/images/{id}', 'HomeEventsController@getImages');
    Route::post('/event/images/delete/{image_name}', 'HomeEventsController@deleteEventImage');

    Route::resource('campuslife', 'CampusLifeController');
    
    Route::resource('latest_news', 'LatestNewsController');
    Route::get('/news/images/{id}', 'LatestNewsController@getImages');
    Route::post('/news/images/delete/{image_name}', 'LatestNewsController@deleteLatestNewsImage');

    Route::resource('partners', 'OurPartnerController');
    Route::get('partners/get-image/{id}', 'OurPartnerController@getPartnerImage');
    Route::post('/partners/images/delete/{image_name}', 'OurPartnerController@deletePartnerImage');
    
    Route::get('social_contact', 'ContactController@social')->name('contact.social');
    Route::post('social_contact_store', 'ContactController@social_store')->name('contact.social-media.store');
    Route::get('social_contact_show/{id}', 'ContactController@social_show')->name('contact.socials.show');
    Route::get('social_contact_edit/{id}', 'ContactController@social_edit')->name('contact.socials.edit');
    Route::post('social_contact_update/{id}', 'ContactController@social_update')->name('contact.socials.update');
    Route::delete('social_contact_delete/{id}', 'ContactController@social_destroy')->name('contact.socials.destroy');

    Route::resource('contactform', 'ContactFormController');
    Route::post('contactform_issue', 'ContactFormController@store_issue')->name('contactform_issue');
    Route::delete('contactform_issue_destroy/{id}', 'ContactFormController@issue_destroy')->name('contactform_issue.destroy');

    Route::get('visitors', 'VisitorsController@index')->name('visitors.index');

});
