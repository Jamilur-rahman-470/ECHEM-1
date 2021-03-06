<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        // dd($product);
        $price =  0;
        $size = "None";
        if (!empty(request('price'))){
            $data = explode(',', request('price'));
            $price = (float)$data[0];
            $size = $data[1];
        }
        else{
            $price = $product->price;
        }
        
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $price,
            'quantity' => 1,
            'attributes' => array(
                'size' => $size
            ),
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('cartItems'));

    }


    public function delete($itemId)
    {
        \Cart::session(auth()->id())->remove($itemId);
        return back();
    }


    public function update($rowId)
    {
        // \Cart::session(auth()->id())->update($rowId, [
        //     'quantity' => array(
        //         'relative' => false,
        //         'value' => request('quantity')
        //     )
        // ]);
        // return back();
    }


    public function checkout()
    {
        return view('cart.checkout');
    }


    public function applyCoupon()
    {
        $couponCode = request('coupon_code');

        $couponData = Coupon::where('code', $couponCode)->first();

        if(!$couponData) {
            return back()->withMessage('Sorry! Coupon does not exist');
        }


        //coupon logic
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $couponData->name,
            'type' => $couponData->type,
            'target' => 'total',
            'value' => $couponData->value,
        ));

        \Cart::session(auth()->id())->condition($condition); // for a speicifc user's cart


        return back()->withMessage('coupon applied');
    }
}
