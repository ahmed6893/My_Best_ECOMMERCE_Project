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
    public function address()
    {
        return view('website.customer.address');
    }
    public function notification()
    {
        return view('website.customer.notification');
    }
}
