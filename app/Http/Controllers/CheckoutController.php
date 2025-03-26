<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Customer;
use App\Models\Order;
use Cart;
use Illuminate\Support\Facades\Mail;
use Session;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        if (count(Cart::content()) == 0)
        {
            return redirect('/product/cart')->with('message','Your Shopping Cart Is Empty. Please Add Some Product ');
        }
        if (Session::has('customerId'))
        {
            return view('website.checkout.index');
        }
        Session::put('checkout','checkout');
        return redirect('/customer/login');
    }

    public $sslCommerze;
    public function newOrder(Request $request)
    {
        if($request->payment_method == 'cash')
        {
            Order::newOrder($request);
            $customerEmail =Customer::find(Session::get('customerId'))->email;
            $title = 'Thank You for your order';
            $body = 'We have received your order and will process it shortly.';
            Mail::to($customerEmail)->send(new OrderMail($title,$body));
            return redirect('/checkout/complete-order')->with('message','Your Order Save Successfully . Please Wait We Will Contact with You soon.');
        }
        else{
            $customer= Customer::find(Session::get('customerId'));
            $this->sslCommerze = new SslCommerzPaymentController();
            $this->sslCommerze->index($request,$customer);
        }

    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }

}
