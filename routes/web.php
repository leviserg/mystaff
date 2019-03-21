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
//use Auth;

Route::get('/','MainController@index');
Route::post('/main/fetch', 'MainController@fetch')->name('main.fetch');;

Auth::routes();
//Route::auth();

Route::get('/home', 'AdminController@index');
Route::get('/admin', 'AdminController@admin')->name('admin');
Route::get('/admin/getdata', 'AdminController@getdata')->name('admin.getdata');
Route::get('/admin/{place}/{id}','AdminController@getsingle');
Route::post('/admin/{place}/{id}','AdminController@store');
