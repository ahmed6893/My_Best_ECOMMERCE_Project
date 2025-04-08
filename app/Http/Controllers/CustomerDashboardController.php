<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;

class CustomerDashboardController extends Controller
{
    public function index()
    {
        return view('website.customer.your-order',['orders'=>Order::with(['customer','orderDetails.kilogram'])
            ->where('customer_id',Session::get('customerId'))->get()]);
    }
    public function setting()
    {
        $customer = Auth::guard('customer')->user();
        return view('website.customer.setting',['customer'=>$customer]);
    }

    public function updateDetails(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,'.auth()->guard('customer')->id(),
            'phone' => 'nullable|string|max:20'
        ]);

        $customer = auth()->guard('customer')->user();
        $customer->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return back()->with('success', 'Details updated successfully!');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password'=>'required',
            'new_password'=>'required|min:8|confirmed',
        ]);

        $customer = auth()->guard('customer')->user();

        if(!Hash::check($request->current_password , $customer->password))
        {
            return back()->with('error','Current password is incorrect');
        }
        else
        $customer->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('success','Password updated successfully');
    }

    public function address()
    {
        return view('website.customer.address');
    }
    public function notification()
    {
        return view('website.customer.notification');
    }
}
