<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('layouts.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'date' => 'required',
        ]);
        $customer = new Customer();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer['date-of-birth'] = $request['date'];
        $customer->save();
        return redirect('customer/data')->with(['success' => 'Customer SuccessFully Insert']);
    }
    public function store()
    {
        $customer = Customer::all();
        return view('layouts.data', ['customer' => $customer]);
    }
    public function edit($id)
    {
        if (!is_null(Customer::find($id))) {
            $customer = Customer::find($id);
            return view('layouts.edit', ['customer' => $customer]);
        } else {
            return redirect('customer/data');
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'date' => 'required',
        ]);
        $customer = Customer::find($id);
        $customer['name'] = $request['name'];
        $customer['email'] = $request['email'];
        $customer['gender'] = $request['gender'];
        $customer['address'] = $request['address'];
        $customer['date-of-birth'] = $request['date'];
        $customer->save();
        return redirect('customer/data')->with(['success' => 'Customer SuccessFully Update']);
    }
    public function destroy($id)
    {
        if (!is_null(Customer::find($id))) {
            $customer = Customer::find($id);
            $customer->delete();
            return redirect('customer/data')->with(['delete' => 'Customer SuccessFully Delete']);;
        } else {
            return redirect('customer/data');
        }
    }
}
