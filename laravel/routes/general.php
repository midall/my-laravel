<?php

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
|
| This file contains the General Routes of the app
|
*/

Route::get( 'home', function () {
    return view( 'home' );
});

Route::get( 'about', function () {
    return view( 'about' );
});


Route::get( 'contact', function () {
    return view( 'contact' );
});

Route::post( 'contact/submit', 'MessagesController@submit');
?>