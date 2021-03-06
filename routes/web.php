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
Route::get('/scraper/first', function() {
    include('Constants.php');
    require_once('Copycat.php');
    $cc = new Copycat;
    $cc->match(array(
    'first' => '/class="oxencycl-headword">(.+?)</ms',))->
    URLs('http://www.oxfordreference.com/view/10.1093/acref/9780198610601.001.0001/acref-9780198610601-e-200');
    echo $cc;
});
