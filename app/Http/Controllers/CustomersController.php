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

    public function store() {
    	$nickname = request('nickname');

    	# display the value of a var to check
    	//dd($nickname);

    	$customer = new Customer();
    	$customer->name = $nickname;

    	# create a record on the bdd 
    	$customer->save();

    	# return to the last view opened
    	return back();
    }
}
