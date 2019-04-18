<?php

/*
|--------------------------------------------------------------------------
|This is Project Route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Authontication Admin*/
Route::get('/', function () {
    return view('welcome');
});
//Login
Route::get('/admin', 'LoginController@index');
Route::post('/submit/login', 'LoginController@submitlogin');

//forget password
Route::get('/forget-password','forgetpasswordController@verifyemail');
Route::post('/submit/verify-email','forgetpasswordController@forgetpassword');
//reset forget Password
Route::get('/admin/w4t{id}j6/reset-password','forgetpasswordController@mailtoresetindex');
Route::post('/submit/email/reset/password','forgetpasswordController@mailtoresetpassword');


Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin'], function () {
        //dashboard
        Route::get('/dashboard', 'dashboardController@dashboard');
        //location add
        Route::get('/location', 'LocationController@index');
        Route::post('/add-country', 'LocationController@addcountry');
        Route::post('/add-city', 'LocationController@addcity');
        Route::post('/add-thana', 'LocationController@addthana');
        Route::get('/delete/thana/{thana_id}', 'LocationController@deletethana');
        Route::get('/delete/city/{city_id}', 'LocationController@deletecity');
        Route::get('/delete/country/{country_id}', 'LocationController@deleteCountry');
        Route::get('ajaxselectcity', 'LocationController@ajaxselectcity')->name('ajaxselectcity');


//        //Settings
//        Route::get('/settings', 'SettingController@setingindex');
//        Route::post('basic-setting-add', 'SettingController@basicsettings');
//        Route::post('contact-info-add', 'SettingController@contactinfo');
//        Route::post('email-info-add', 'SettingController@emailinfo');
//        //Menu
//        Route::get('/menu', 'MenuController@menuindex');
//        //pages
//        Route::get('/pages', 'PageController@pageindex');
//        Route::get('/new-page', 'PageController@createpage');
//        Route::post('/page-add', 'PageController@storenewpage');
//        Route::get('/edit-p29{id}8e9-pages', 'PageController@editpage');
//        Route::post('/update-p29{id}8e9-page', 'PageController@updatepage');
//        Route::get('/delete-p29{id}8e9-pages', 'PageController@deletepage');






    });
});


/*Registration by seeker and employer*/
Route::get('/registration', 'RegistrationController@registerindex');
Route::post('/store_registration', 'RegistrationController@storeregister');
Route::post('/store_registration', 'RegistrationController@storeregister');
Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');
/*Login by seeker and employer*/
Route::post('/submit/userlogin', 'LoginController@loginproviderseker');
Route::post('/logout', 'LoginController@logout');

/*employer login dashboard*/
Route::group(['prefix' => 'employer'], function () {
    Route::group(['middleware' => 'employer'], function () {
         Route::get('/dashboard', 'dashboardController@employerDashboard');
         Route::get('/edit_account', 'CompanyprofileController@companyprofile');
         Route::post('/update_company_profile', 'CompanyprofileController@updatecompanyprofile');
         Route::get('ajaxselectemployercity', 'CompanyprofileController@ajaxselectemployercity')->name('ajaxselectemployercity');
         Route::get('ajaxselectemployerthana', 'CompanyprofileController@ajaxselectemployerthana')->name('ajaxselectemployerthana');
         Route::post('/add-thana', 'CompanyprofileController@addthana');
         Route::post('/industry-type', 'CompanyprofileController@addindustrytype');
    });
});
/*candidate login dashboard*/
Route::get('/candidate/dashboard', 'dashboardController@candidateDashboard');

//Account Setting
//Route::get('/admin/account-setting', 'settingController@accountsetting')->middleware('admin');
//Route::post('/admin/reset/password', 'settingController@updatesetting')->middleware('admin');
////Profile picture upload
//Route::post('/admin/upload/profile-picture', 'settingController@uploadprofilesetting')->middleware('admin');


