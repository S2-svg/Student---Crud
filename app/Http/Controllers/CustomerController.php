<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerType;
use Illuminate\Support\Facades\Redirect;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::orderBy('id', 'desc')->get();
        return view('customers.list', compact('customers'));
    }

    public function create(){
        $types = CustomerType::all();
        return view('customers.create', compact('types'));

    }

    public function store(){
        Customer::create([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'gender' => request()->gender,
            'customer_type_id' => request()->customer_type_id
        ]);
        return redirect('/customer');
    }

    public function edit($id) {
        $customer = Customer::find($id);
        $types = CustomerType::all();
        return view('customers.edit', compact('customer', 'types'));
    }

    public function update($id) {
        $customer = Customer::find($id);
        $customer->update([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'gender' => request()->gender,
            'customer_type_id' => request()->customer_type_id
        ]);
        return redirect('/customer');
    }

    public function destroy($id){
        $customer = Customer::find($id);
        $customer->delete();
        return Redirect('/customer');
    }


};
