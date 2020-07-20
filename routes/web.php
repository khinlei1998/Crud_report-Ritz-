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

// Route::get('/', function () {
//     return view('report');
// });
Route::get('/',function(){
    return view('welcome');
});
Route::resource('/nocreport','NocReportsController');
Route::resource('/gooddelivery','GoodDeliveryFormsController');

// Route::get('/all_reports','NocReportsController@showall');

Route::get('/daily_rp','NocReportsController@daily_rp');

Route::get('/reportdetail','NocReportsController@all');
Route::get('/pdf/{id}', 'NocReportsController@fun_pdf');
// ajax
Route::post('/getUser','NocReportsController@getuser')->name('getUser');


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
