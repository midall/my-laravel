<?php

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
|
| This file contains the General Routes of the app
|
*/

Route::get( '/', 'PagesController@getHome' );
Route::get( 'home', 'PagesController@getHome' );
Route::get( 'about', 'PagesController@getAbout' );
Route::get( 'contact', 'PagesController@getContact' );

Route::get( 'messages', 'MessagesController@getMessages' );
Route::post( 'contact/submit', 'MessagesController@submit' );

?>