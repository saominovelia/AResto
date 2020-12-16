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

Route::get('/', 'MainController@index');

Route::group(['prefix'=>'contact'],function(){
    Route::get('/', 'ContactController@index');
    Route::post('insert', 'ContactController@insert');
    Route::get('finish', 'ContactController@finish');
    Route::get('privacy', 'ContactController@privacy');
});

Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::get('/', function (){
        return view('auth.login');
    });
    Route::get('/home', 'AdminController@home')->name('home');
    Route::get('/contact', 'AdminController@contact')->name('contact');
    Route::get('/terms', 'AdminController@terms')->name('terms');
    Route::get('/privacy', 'AdminController@privacy')->name('privacy');
    Route::get('/listContact', 'AdminController@listContact')->name('listContact');
    Route::get('/home/edit/{id}', 'AdminController@homeEdit');
    Route::get('/contact/edit/{id}', 'AdminController@contactEdit');
    Route::get('/terms/edit/{id}', 'AdminController@termsEdit');
    Route::get('/administration/edit/{id}', 'AdminController@adminEdit');
    Route::get('/privacy/edit/{id}', 'AdminController@privacyEdit');
    Route::get('/administration', 'AdminController@administration')->name('administration');
    Route::get('/registration', 'AdminController@registration')->name('registration');
    Route::get('/administration/delete/{id}', 'AdminController@delete');
    Route::post('/contact/update/{id}', 'AdminController@updateContact');
    Route::post('/terms/update/{id}', 'AdminController@updateTerms');
    Route::post('/home/update/{id}', 'AdminController@updateHome');
    Route::post('/privacy/update/{id}', 'AdminController@updatePrivacy');
    Route::post('/post-registration', 'AdminController@postRegistration');
    Route::post('/post-updateAdmin', 'AdminController@updateAdmin');

});


