<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomersController extends Controller
{
    public function list() {
    	//$customers = Customer::all();

        // filtered request
        $customers = Customer::where("status", '=', False)->get();

	   // send data named "customer" from the array "$customers"
	   return view('customers.index', ['customers' => $customers]);
    }


    public function store() {

    	# add a rule from laravel validation place to check the values 
    	# required -> check if the value is null or empty
        # email -> valid email
        # min -> characters minimum
    	request()->validate([
    		'nickname' => 'required|min:3',
            'email' => 'required|email' # rules combination
        ]);

    	
        // retrieve the values from post requests
    	$nickname = request('nickname');
        $email = request('email');

        ## tip : if the value "status" doesn't exist, the checkbox isn't checked
        $status = isset($_POST['status']);

        
    	# display the value of a var to check
    	//dd($status);

        // make a new customer with the retrieved values
    	$customer = new Customer();
    	$customer->name = $nickname;
        $customer->email = $email;
        $customer->status = $status;

    	# save the new customer by create a record on the bdd 
    	$customer->save();

    	# return to the last view opened
    	return back();
    }
}
