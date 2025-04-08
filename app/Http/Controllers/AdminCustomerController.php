<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::with('orders')->get();
        return view('admin.customer.index',['customers'=>$customer]);
    }
}
