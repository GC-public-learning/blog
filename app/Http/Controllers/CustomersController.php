<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomersController extends Controller
{
    public function list() {
    	//$customers = Customer::all();

        // filtered request
        $customers = Customer::status();

	   // send data named "customer" from the array "$customers"
	   return view('customers.index', ['customers' => $customers]);
    }


    public function store() {

    	# add a rule from laravel validation place to check the values 
    	# required -> check if the value is null or empty
        # email -> valid email
        # min -> characters minimum
    	$a = request()->validate([
    		'name' => 'required|min:3',
            'email' => 'required|email' # rules combination
        ]);

        ## tip : if the value "status" doesn't exist, the checkbox isn't checked
        $a['status'] = isset($_POST['status']);

        
    	# display the value of a var to check
    	//dd($a);

        // make a new customer with the retrieved values
    	Customer::create($a);


    	# return to the last view opened
    	return back();
    }
}
