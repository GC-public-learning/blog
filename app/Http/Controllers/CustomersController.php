<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list() {
    	$customers = [
			'Jean',
			'Marc',
			'Yves'
	];

	// send data named "customer" from the array "$customers"
	return view('customers.index', ['customers' => $customers]);
    }
}
