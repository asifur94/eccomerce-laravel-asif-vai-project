<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with("product","user")->get();
        
        return view("dashboard.orders.index",["orders" => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        try {
            if(auth()->check()){
                $cart = session()->get('cart');
            
            if ($cart) {
                foreach ($cart as $key => $item) {
                    $order = Order::create([
                        'product_id' => $item['product_id'],
                        'user_id' => Auth::user()->id,
                        'qty' => $item['quantity'],
                        'status' => 0
                    ]);
                }
            }

            session()->forget('cart');

            return response()->json(['success' => true, 'message' => 'Order created successfully']);
            }else{
                return response()->json(['success' => false, 'error' => 'You are not logged in']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $order = Order::where("id",$id)->update([
            "status" => $request->status
        ]);
        return response()->json(["status" => true,"message" => "Order updated successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);

        $order->delete();

        return response()->json(["status" => true,"message" => "Order deleted successfully"]);
    
    }
}
