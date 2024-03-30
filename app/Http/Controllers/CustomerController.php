<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerController extends Controller
{
    public function index()
    {
        $data['Customers'] = Customer::all();
        $data['CustomerTypes'] = CustomerType::all();
        return view('admin.customers.customer.index',$data);
    }

    public function create(){
        $data['CustomerType'] = CustomerType::All();
        return view('admin.customers.customer.create', $data);
    }

    public function edit($id)
    {
        $Customer = Customer::findOrFail($id);
        $CustomerType = CustomerType::all();
        return view('admin.customers.customer.edit' , compact('Customer', 'CustomerType'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:50',
            'customertype_id' => 'required',
            'customer_code' => 'required',
            'sex' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'passportnumber' => 'required',
            'country' => 'required'
        ]);

        $customer = Customer::create([
            'customer_name' => $request->input('customer_name'),
            'customertype_id' => $request->input('customertype_id'),
            'customer_code' => $request->input('customer_code'),
            'sex' => $request->input('sex'),
            'dob' => $request->input('dob'),
            'phone' => $request->input('phone'),
            'passportnumber' => $request->input('passportnumber'),
            'country' => $request->input('country')
        ]);

        return Redirect::route('customers.index')->with('success', 'Customer created successfully');
    }



    public function update(Request $request, $id)
    {
        $Customer = Customer::findOrFail($id);
        $Customer->update($request->all());

        return Redirect::route('customers.index')->with('success', 'Updated successfully');
    }

    public function destroy($id)
    {
        $Customer = Customer::findOrFail($id);
        $Customer->delete();

        return Redirect::route('customers.index')->with('success', 'Deleted successfully');
    }
}
