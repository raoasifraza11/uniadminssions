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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Theme routes
#Home
Route::get('/', 'PagesController@index');

#about
Route::get('/about', 'PagesController@about');

#search
Route::get('/search', 'PagesController@search');

#contact
Route::get('/contact', 'PagesController@contact');

#byalpha
Route::get('/byalpha', 'PagesController@byAlpha');

# byArea
Route::get('/byarea', 'byareaController@byArea');

# byCategory
Route::get('/bycategory', 'bycategoryController@byCategory');