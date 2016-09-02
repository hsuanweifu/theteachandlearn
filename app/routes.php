<?php
// HOME PAGE
Route::resource('/home', 'HomeController');

// SEARCH PAGE
Route::resource('/search', 'SearchController');

// MESSAGES PAGE
Route::resource('/message', 'MessageController');

// PROFILE PAGE
Route::resource('/profile', 'ProfileController');

// SETTING PAGE
Route::resource('/setting', 'SettingController');

// ABOUT US PAGE
Route::resource('/about_us', 'AboutUsController');

// SIGN UP PAGE
Route::resource('/sign_up', 'SignUpController');

// FORGOT PASSWORD PAGE
Route::resource('/forgot_password', 'ForgotPasswordController');

// RESET PASSWORD PAGE
Route::resource('/reset_password', 'ResetPasswordController');

// LOGIN PAGE
Route::resource('/login', 'LoginController');

// LOGOUT PAGE
Route::resource('/logout', 'LogoutController');

// UNAVAILABLE PAGE
Route::resource('/{any}', 'HomeController');


/*
Route::get('/', function()
{
	return View::make('hello');
});
//Route::get('/', function () {
//    return view('home/home');
//});
/*
Route::get('/about_us', function () {
	return view('about_us/about_us');
});
Route::get('/forgot_password', function () {
	return view('login/forgot_password');
});

Route::get('/reset_password', function () {
	return view('login/reset_password');
});

Route::get('/conversation', function () {
	return view('messages/conversation');
});

Route::resource('/search', 'SearchController');
Route::resource('/search_result', 'SearchResultController');


//HOME PAGE
Route::get('/', 'HomePageController@index');
Route::get('logout', 'HomePageController@userLogout');

//PROFILE PAGE
Route::get('/profile', 'ProfileController@index');

//MESSAGE PAGE
Route::get('/messages', 'MessageController@index');

//SETTINGS PAGE
Route::get('/settings',                                 'SettingsController@index');
Route::resource('/settings/subject',                    'SubjectController');
Route::resource('/settings/award',                      'AwardController');
Route::post('/settings/display_picture',                'SettingsController@displayPicture');
Route::resource('/settings/education_information',      'EducationController');
Route::post('/settings/location_information',           'SettingsController@locationInformation');
Route::post('/settings/password_reset',                 'SettingsController@passwordReset');
Route::post('/settings/user_information',               'SettingsController@userInformation');


//SIGN UP PAGE
Route::resource('sign_up', 'SignUpController');
Route::get('activate/{code}', 'SignUpController@activateUser');

//LOGIN PAGE
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@authenticate');

//FORGOT PASSWORD PAGE
Route::post('forgot_password', 'LoginController@forgotPassword');

//RESET PASSWORD
Route::get('reset_password/{code}', 'ResetPasswordController@index');
Route::post('reset_password', 'ResetPasswordController@postReset');


//SEARCH PAGE
Route::get('search', 'SearchController@index');

Route::post('search', 'SearchController@searchByName');*/