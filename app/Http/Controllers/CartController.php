<?php

namespace App\Http\Controllers;

use App\Models\Kilogram;
use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    public function productCart()
    {
        return view('website.cart.index',['products'=>Cart::content()]);
    }
    public $product;
    public function store(Request $request)
    {
        $this->product = Product::find($request->id);
        $kilogram = Kilogram::find($request->kilogram);
        Cart::add([
            'id' => $request->id,
            'name' => $this->product->name,
            'qty' =>$request->qty,
            'price' => $this->product->selling_price,
            'weight' => 0,
            'options' => [
                'image'=>$this->product->product_image,
                'code' => $this->product->code,
                'kilogram'=>$kilogram->name,
            ]]);
        return redirect('/product/cart');
    }

    public function update(Request $request, $rowId)
    {
        $request->validate([
            'qty' => 'required|integer|min:1|max:10',
        ]);

        Cart::update($rowId, $request->qty);

        return back()->with('success', 'Cart updated successfully!');
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('delete', 'Item removed from cart');
    }
}
