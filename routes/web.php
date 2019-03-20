<?php

include('include/admin.php');
include('include/user.php');
include('include/guest.php');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
