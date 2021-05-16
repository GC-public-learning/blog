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

// shorter way : 1st param = url, 2nd = view name
// end of viewname not taken into account (blade.php) 
Route::view('contact', 'contact');
Route::view('infos', 'infos');

// !! be carrefull : in the path, write "App" with uppercase for the 1st letter 
// otherwise the path doesn't work !!
Route::get('customers', 'App\Http\Controllers\CustomersController@list');
Route::post('customers', 'App\Http\Controllers\CustomersController@store');

