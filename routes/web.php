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

/*
| Display the main page with two forms
*/
Route::get('/', 'FormController@index');

/*
| Submit the lorem and user forms
*/
Route::post('/lorem', 'LoremController@generate');
Route::post('/users', 'UserController@generate');


/*
| Tools to scrape names (first and last)
*/
// Route::get('/scraper', 'ScraperController@first');
// Route::get('/scraper', 'ScraperController@last');
