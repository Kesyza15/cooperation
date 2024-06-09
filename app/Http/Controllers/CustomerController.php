<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create() {
        return view('customers.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'code' => 'required|unique:customers|max:4',
            'name' => 'required|max:30',
            'phone' => 'max:15',
            'address' => 'required'
        ]);

        $customer = new Customer();
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if($customer->save()) {
            return redirect()->route('customers.show', $customer->id);
        } else {
            dd("Data nasabah gagal disimpan");
        }
    }

    public function show($id) {
        $customer = Customer::find($id);

        return view('customers.show', compact('customer'));
    }

    public function index() {
        $customers = Customer::all();

        return view('customers.index', compact('customers'));
    }
}