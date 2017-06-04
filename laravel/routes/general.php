<?php

/*
|--------------------------------------------------------------------------
| General Routes
|--------------------------------------------------------------------------
|
| This file contains the General Routes of the app
|
*/


//Route::get( 'home', 'Home@homepage');

Route::get('home', function () {
    return view('welcome');
});

/*
Route::post( 'home', function () {
   return 'Hello World';
});
 * 
Route::put('foo/bar', function () {
   //
});

Route::delete('foo/bar', function () {
   //
});
*/

?>