<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function addItem(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [];
        }

        $cart[] = [
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ];

        session()->put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Item added to cart successfully']);
    }

    public function increaseQty(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [];
        }

        foreach ($cart as $key => $item) {
            if ($item['product_id'] == $request->product_id) {
                $cart[$key]['quantity'] += 1;
                break; 
            }
        }

        session()->put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Quantity increased successfully']);

    }
    public function decreaseQty(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = [];
        }

        foreach ($cart as $key => $item) {
            if ($item['product_id'] == $request->product_id) {
                $cart[$key]['quantity'] -= 1;
                break; 
            }
        }

        session()->put('cart', $cart);

        return response()->json(['success' => true, 'message' => 'Quantity increased successfully']);

    }

    public function removeItem(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
    ]);

    $cart = session()->get('cart');

    
    if (!$cart) {
        return response()->json(['success' => false, 'message' => 'Cart is empty']);
    }

    
    foreach ($cart as $key => $item) {
        if ($item['product_id'] == $request->product_id) {
           
            unset($cart[$key]);
            break;
        }
    }

 
    session()->put('cart', $cart);

    return response()->json(['success' => true, 'message' => 'Item removed from cart successfully']);
}

    public function show()
    {
        $allProduct = [];
        // Retrieve cart items from session
        $cartItems = session()->get('cart', []);
        foreach ($cartItems as $item) {
            $product = Product::find($item['product_id']);
            $allProduct[] = [
                'id' => $product->id,
                'name' => $product->title,
                'image' => $product->image,
                'price' => intval($product->price),
                'totalPrice' => intval($product->price) * intval($item['quantity']),
                'quantity' => $item['quantity'],
            ];
        }
        return $allProduct;
    }
}
