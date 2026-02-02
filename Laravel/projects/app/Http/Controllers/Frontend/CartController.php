<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carts;
use App\Models\CartItems;

class CartController extends Controller
{
    //
    public function index($user_id)
    {
        //
        $carts = Carts::with(['user', 'cartItems.product'])
                            ->where('user_id', $user_id)->first();
        $total = 0;
        if ($carts) {
            foreach ($carts->cartItems as $item) {
                $total += $item->price * $item->quantity;
            }
        }
        return view('frontend.cart', compact('carts','total'));
    }

    public function add(Request $request)
    {
        //
        $request->validate([
            'product_id' => 'required',
            'quantity'   => 'required|min:1'
        ]);

        $cart = Carts::firstOrCreate(
            ['user_id' => Auth::id()],
        );

        $existingItem = CartItems::where('cart_id', $cart->id)
                            ->where('product_id', $request->product_id)
                            ->first();
        if ($existingItem) {
            $existingItem->quantity += $request->quantity;
            $existingItem->save();
        }
        else {
            CartItems::create([
                'cart_id' => $cart->id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'price' => $request->price,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function remove(Request $request, $cart_item_id)
    {
        //
        $cart = Carts::where('user_id', Auth::id())->first();

        $cartItem = CartItems::where('cart_id', $cart->id)
                            ->where('id', $cart_item_id)
                            ->first();
        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully!');
    }
}
