<?php

namespace App\Http\Controllers;
use App\Models\Company;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomersController extends Controller
{
    public function index() {
    	# $customers = Customer::all();

        # filtered request
        $customers = Customer::all();

	   # compact is a convenient way to send data on the view
	   return view('customers.index', compact('customers'));
    }

    public function create() {
        $companies = Company::all();

        # send empty object to prevent "undefined variable error" with create form 
        $customer = new Customer();
        return view('customers.create', compact('companies', 'customer'));
    }


    public function store() {

    	# add a rule from laravel validation place to check the values 
    	# required -> check if the value is null or empty
        # email -> valid email
        # min -> characters minimum
    	$data = request()->validate([
    		'name' => 'required|min:3',
            'email' => 'required|email', # rules combination
            'company_id' => 'required|integer'
        ]);

        ## tip : if the value "status" doesn't exist, the checkbox isn't checked
        $data['status'] = isset($_POST['status']);

        
    	# display the value of a var to test
    	//dd($a);

        # make a new customer with the retrieved values
    	Customer::create($a);


    	# return to the last view opened
    	return back();
    }

    /*
    public function show($customer) { # $customer is an id
        # $customer = Customer::find($customer);

        # better than the instruction just above because generate 404 if error
        $customer = Customer::where('id', $customer)->firstOrFail();
        # dd($customer); # to test
        return view('customers.show', compact('customer'));
    }
    */

    // model binding : shorter way and generate automaticaly 404 in error case
    public function show(Customer $customer) {
        return view('customers/show', compact('customer'));
    }

    public function edit(Customer $customer) {
        $companies = Company::all();
        return view('customers/edit', compact('customer', 'companies'));
    }
    public function update(Customer $customer) {
        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email', # rules combination
            'company_id' => 'required|integer'
        ]);
        $customer->update($data);
        return redirect('/customers/'.$customer->id);

    }
}
