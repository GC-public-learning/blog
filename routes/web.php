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

Route::get('customers', function () {

	$customers = [
		'Jean',
		'Marc',
		'Yves'
	];

	// send data named "customer" from the array "$customers"
	return view('customers.index', ['customers' => $customers]);
});

