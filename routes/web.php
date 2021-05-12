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

// main route on the root that targets a view 
Route::get('/', function () {
    return view('welcome');
});

// route at such adress (/contact) that targets a string
Route::get('/contact', function () {
	return "contact us";
});

// idem as above but targets conventional server infos
Route::get('/infos', function () {
	return phpinfo();
});
