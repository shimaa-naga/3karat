<?php


/* admin routes*/

Route::group(['middleware' => ['web','admin']], function(){


    //Datatable Ajax
    Route::get('/adminpanel/users/data', ['as'=>'adminpanel.users.data' ,'users'=>'UsersController@anyData']);
    Route::get('/adminpanel/bu/data', ['as'=>'adminpanel.bu.data' ,'users'=>'BuController@anyData']);




    Route::get('/adminpanel','AdminController@index');
    Route::resource('/adminpanel/users','UsersController');
    Route::post('/adminpanel/user/changepassword','UsersController@updatePassword');
    Route::get('/adminpanel/users/{id}/delete','UsersController@destroy');




    /*
    Route::get('/adminpanel/users/create','UsersController@create');
    Route::post('/adminpanel/users/create','UsersController@store');
    Route::get('/adminpanel/users/{id}/edit','UsersController@edit');
    Route::post('/adminpanel/users/update','UsersController@update');
    */

    //setting site
    Route::get('/adminpanel/sitesetting','SiteSettingController@index');
    Route::post('/adminpanel/sitesetting','SiteSettingController@store');


    //bu
    Route::resource('/adminpanel/bu','BuController');

});




/* user routes*/


Route::get('/test', function () {
    return view('layouts.test');
});




Route::group(['middleware' => 'web'], function(){

    Auth::routes();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'HomeController@index')->name('home');
});