<?php

use Illuminate\Support\Facades\Route;

// !! be carrefull : in the path, write "App" with uppercase for the 1st letter 
// otherwise the path doesn't work !!
use App\Http\Controllers\CustomersController;

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


// customers
Route::get('customers', [CustomersController::class, 'index']);
Route::post('customers', [CustomersController::class, 'store']);
Route::get('customers/create', [CustomersController::class, 'create']);

// "customer" mean "id" of that last one
Route::get('customers/{customer}', [CustomersController::class, 'show']);
Route::get('customers/{customer}/edit', [CustomersController::class, 'edit']);
Route::patch('customers/{customer}', [CustomersController::class, 'update']);