<?php

Route::get('/', 'OpenController@index')->name('open');

Route::get('/about-us', 'OpenController@aboutus')->name('aboutus');
Route::get('/contact-us', 'OpenController@contactus')->name('contactus');
Route::get('/privacy-policy', 'OpenController@privacy')->name('privacy');


Route::get('/jobsearch', 'JobsController@jobsearch');
Route::get('/leftcontu', 'JobsController@leftcontu');


Route::get('/jobfetchloc', 'JobsController@jobfetchloc');
Route::get('/jobfetchcat', 'JobsController@jobfetchcat');
Route::get('/jobfetchpost', 'JobsController@jobfetchpost');
Route::get('/jobfetchqual', 'JobsController@jobfetchqual');
Route::get('/jobfetchexp', 'JobsController@jobfetchexp');

Route::get('/ac', 'JobsController@autocat');
Route::get('/ap', 'JobsController@autopost');
Route::get('/aq', 'JobsController@autoqual');
Route::get('/ae', 'JobsController@autoexp');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@admin')->name('admin');

Route::get('/userform', 'UserformController@userform')->name('userform');
Route::get('/newform', 'UserformController@newform')->name('newform');
Route::post('/userform/store', 'UserformController@store')->name('userformstore');
Route::get('/userform/formedit', 'UserformController@formedit')->name('formedit');
Route::get('/userform/destroy/{id}', 'UserformController@destroy')->name('userformdestroy');


Route::get('/notification', 'NotificationsController@notification')->name('notification');
Route::get('/notification/inbox', 'NotificationsController@inbox')->name('inbox');
Route::get('/notificationform', 'NotificationsController@notificationform')->name('notificationform');
Route::post('/notification/store', 'NotificationsController@store')->name('notificationstore');
Route::get('/notification/destroy/{id}', 'NotificationsController@destroy')->name('destroy');
Route::get('/acknowledgeus', 'NotificationsController@acknowledgeus')->name('acknowledgeus');

Route::get('/resend/activation', 'ResendVerificationController@showResendform')->name('activate.resend');
Route::post('/resend/activation', 'ResendVerificationController@resend');

Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

 

Route::prefix('admin')->group(function(){
	
	Route::get('login','Auth\AdminLoginController@showLoginForm')->name('admin-form');
	Route::post('login','Auth\AdminLoginController@login')->name('admin-login');
	Route::post('logout','Auth\AdminLoginController@logout')->name('admin-logout');
	
	Route::post('password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('password/reset','Auth\AdminResetPasswordController@reset');
	Route::get('password/reset/{token}','Auth\AdminResetPasswordController@showLinkRequestForm')->name('admin.password.reset');

	
	Route::post('/store', 'AdminController@store')->name('store');
	Route::get('/destroy/{id}',  'AdminController@destroy');
	Route::delete('deleteAll', ['as'=>'jobs.deleteAll', 'uses'=>'AdminController@deleteAll']);
	
	Route::get('/searchempty', 'AdminController@searchempty')->name('searchempty');
	Route::get('/addjob', 'AdminController@addjob')->name('addjob');
	Route::get('/jobedit', 'AdminController@jobedit')->name('jobedit');

	Route::get('/addcat', 'AdminControllerAddCat@addcat')->name('addcat');
	Route::post('/storeloc', 'AdminControllerAddCat@storeloc')->name('storeloc');
	Route::post('/storecat', 'AdminControllerAddCat@storecat')->name('storecat');
	Route::post('/storepos', 'AdminControllerAddCat@storepos')->name('storepos');
	Route::post('/storequal', 'AdminControllerAddCat@storequal')->name('storequal');
	Route::post('/storeexp', 'AdminControllerAddCat@storeexp')->name('storeexp');

	Route::get('/locedit', 'AdminControllerAddCat@locedit')->name('locedit');
	Route::get('/catedit', 'AdminControllerAddCat@catedit')->name('catedit');
	Route::get('/posedit', 'AdminControllerAddCat@posedit')->name('posedit');
	Route::get('/qualedit', 'AdminControllerAddCat@qualedit')->name('qualedit');
	Route::get('/expedit', 'AdminControllerAddCat@expedit')->name('expedit');
	
	Route::get('/destroy/loc/{id}',  'AdminControllerAddCat@destroyloc');
	Route::get('/destroy/cat/{id}',  'AdminControllerAddCat@destroycat');
	Route::get('/destroy/pos/{id}',  'AdminControllerAddCat@destroypos');
	Route::get('/destroy/qual/{id}',  'AdminControllerAddCat@destroyqual');
	Route::get('/destroy/exp/{id}',  'AdminControllerAddCat@destroyexp');

	Route::post('/fetchusertomail', 'AdminController@fetchusertomail')->name('fetchusertomail');


	
	
});




