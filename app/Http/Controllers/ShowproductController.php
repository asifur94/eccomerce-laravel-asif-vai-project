<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowproductController extends Controller
{
    public function showproduct(){

        $products = Product::simplePaginate(6);
        $lastedProduct = Product::latest("title")->first();

        return view('home.index',["products"=>$products,"lastedProduct"=>$lastedProduct]);

    }
    public function searchProduct(Request $request){

        $products = Product::where("title","LIKE","%$request->search%")->simplePaginate(6);
        $lastedProduct = Product::latest("title")->first();

        return view('home.search',["products"=>$products,"lastedProduct"=>$lastedProduct]);

    }
    public function singleProduct(string $id){
        $singleProduct = Product::find($id);
        $products = Product::where("product_from",$singleProduct->product_from)
                                    ->orderBy("id", "desc")
                                    ->simplePaginate(6);
        $lastedProduct = Product::where("product_from",$singleProduct->product_from)
        ->oldest("title")->first();
        return view('home.product',[
            "singleProduct"=>$singleProduct,
            "products"=>$products,
            "lastedProduct" => $lastedProduct
        ]);
    }
    public function userAccount() {
        if (auth()->check()) {
            $orders = Order::with("product")->withWhereHas("user",function($query){
                $query->where("id",Auth::user()->id);
            })->get();
            return view('home.account',['orders' => $orders]);
        }else{
            return redirect()->route('home');
        }
    }
}
