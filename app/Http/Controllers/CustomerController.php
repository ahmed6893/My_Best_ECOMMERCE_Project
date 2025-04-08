<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function register()
    {
        return view('website.customer.register');
    }
    public function login()
    {
        return view('website.customer.login');
    }

    public function saveNewCustomer(Request $request)
    {
        $this->customer =Customer::saveNewCustomer($request);
        Session::put('customerId',$this->customer->id);
        Session::put('customerName',$this->customer->first_name.' '.$this->customer->last_name);

        if (Session::get('checkout'))
        {
            Session::forget('checkout');
            return redirect('/product/checkout');
        }
        return redirect('/');
    }
    public $customer;
    public function loginCheck(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'password'  => 'required'
        ]);
        $this->customer = Customer::where('email',$request->user_name)->first();

        if ($this->customer && password_verify($request->password,$this->customer->password))
        {
            Auth::guard('customer')->login($this->customer);

            Session::put('customerId',$this->customer->id);
            Session::put('customerName',$this->customer->first_name);

            if(Session::get('checkout'))
            {
                Session::forget('checkout');
                return redirect('/product/checkout');
            }

            return redirect('/')->with('success','Login Successful');
        }
        else{
            return back()->with('message','Invalid Email or Password');
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();

        Session::forget('customerId');
        Session::forget('customerName');
        return redirect('/')->with('message','Logged Out Successfully');
    }
}
