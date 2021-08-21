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

use App\Http\Controllers\ImagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

Route::get('/', 'ImagesController@index');

Route::get('/about', 'HomeController@about');

Route::get('/create', 'ImagesController@create');

Route::post('/store', 'ImagesController@store');

Route::get('/show/{id}', 'ImagesController@show');

Route::get('/edit/{id}', 'ImagesController@edit');

Route::post('/update/{id}' , 'ImagesController@update');

Route::get('/delete/{id}', 'ImagesController@delete');

