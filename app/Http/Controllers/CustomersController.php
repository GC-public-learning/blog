<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomersController extends Controller
{
    public function list() {
    	$customers = Customer::all();

	// send data named "customer" from the array "$customers"
	return view('customers.index', ['customers' => $customers]);
    }
}
