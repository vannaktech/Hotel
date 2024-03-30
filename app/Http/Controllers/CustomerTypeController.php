<?php

namespace App\Http\Controllers;

use App\Models\CustomerType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CustomerTypeController extends Controller
{
    public function index(){
        $data['customerTypes'] = CustomerType::all();
        return view('admin.customers.customer_type.index', $data);
    }

    public function create(){
        return view('admin.customers.customer_type.create');
    }

    public function store(Request $request){
        $request->validate([
            'customertype_name' => 'required',
        ]);

        $customerType = new CustomerType();
        $customerType->customertype_name = $request->input('customertype_name');
        $customerType->save();

        return Redirect::route('customertypes.index')->with('success', 'Customer Type Added');
    }

    public function edit($id){
        $data['customerTypes'] = CustomerType::findOrFail($id);
        return view('admin.customers.customer_type.edit', $data);
    }

    public function update(Request $request, $id){

        $customerType = CustomerType::findOrFail($id);
        $customerType->update($request->all());
        return Redirect::route('customertypes.index')->with('success', 'Customer Type Updated');
    }

    public function destroy($id){

        $customerType = CustomerType::findOrFail($id);
        $customerType->delete();
        return Redirect::route('customertypes.index')->with('success', 'Customer Type Deleted');
    }

}
