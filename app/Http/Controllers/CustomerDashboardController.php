<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
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
        return view('website.customer.setting');
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

    public function address()
    {
        return view('website.customer.address');
    }
    public function notification()
    {
        return view('website.customer.notification');
    }
}
