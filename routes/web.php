<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


// HOME PAGE
Route::resource('/', 'HomeController');

// SIGN UP PAGE
Route::resource('/register', 'RegisterController');

// Activation Page
Route::resource('/activate', 'ActivateController');

// LOGIN PAGE
Route::resource('/login', 'LoginController');

// LOGOUT PAGE
Route::resource('/logout', 'LogoutController');

// FORGOT PASSWORD PAGE
Route::resource('/forgot_password', 'ForgotPasswordController');

// RESET PASSWORD PAGE
Route::resource('/reset_password', 'ResetPasswordController');

// PROFILE PAGE
Route::resource('/profile', 'ProfileController');

// SETTINGS PAGE
Route::resource('/settings',                        'SettingsController');
Route::resource('/settings/award_information',      'AwardController');
Route::resource('/settings/education_information',  'EducationController');
Route::resource('/settings/address_information',    'AddressController');
Route::resource('/settings/personal_information',   'PersonalController');
Route::resource('/settings/picture_information',    'PictureController');
Route::resource('/settings/schedule_information',   'ScheduleController');
Route::resource('/settings/subject_information',    'SubjectController');

// SEARCH PAGE
Route::resource('/search', 'SearchController');

// INBOX PAGE
Route::resource('/inbox', 'InboxController');

// MESSAGE PAGE
Route::resource('/message', 'MessageController');

// ABOUT US PAGE
Route::resource('/about_us', 'AboutUsController');

// CAREER PAGE
Route::resource('/career', 'CareerController');

// Contact Us
Route::resource('/contact_us', 'ContactUsController');

// ADMIN PAGE
Route::resource('/admin', 'AdminController');

// DEFAULT PAGE
Route::resource('/{any}', 'HomeController');