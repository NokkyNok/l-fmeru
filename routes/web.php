<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','HomeController@index')->name('home');

Auth::routes();

Route::get('/', 'Pages\PagesController@indexpage')->name('index');
Route::get('/all-lost-items', 'Pages\PagesController@lostfound')->name('lostfound');
Route::get('/submit/found-property', 'Pages\PagesController@submit')->name('submit');
Route::get('/search/found-property', 'Pages\PagesController@item_list')->name('itemlist');
Route::get('/item/claim-submission/{id}', 'Pages\PagesController@claim')->name('claim');
Route::post('/item/submit_claim/{id}', 'Pages\PagesController@submitclaim')->name('submitclaim');
Route::get('/search', 'Pages\PagesController@search')->name('search');
Route::resource('/found', 'LostfoundController');
Route::resource('/claim', 'ClaimController');
Route::resource('/contact', 'ContactController');

Route::get('/modal', 'Pages\PagesController@mod')->name('modal');

/* client login */
Route::get('/client_login', 'Pages\PagesController@login')->name('log');
Route::get('/client_register', 'Pages\PagesController@register')->name('reg');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function()
{
 
    Route::resource('/users','UserController');
    
     
});
Route::namespace('Store')->prefix('store')->name('store.')->group(function()
{
 
    Route::get('/items','ItemController@index');
    Route::get('/claimed-items','ItemController@claimed');
    
     
});