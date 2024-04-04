<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ShopifyService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  getProductMobileActive
    public function getProductMobileActive(ShopifyService $shopifyService)
    {
        $type = 1;
        $products = $shopifyService->getProducts();
        // return $products;
        $productData = [];

        foreach ($products['data']['products']['nodes'] as $product) {
            $productData[] = [
                'title' => $product['title'],
                'description' => $product['description'],
                'image' => isset($product['images']['nodes'][0]['src']) ? $product['images']['nodes'][0]['src'] : null,
                'price' => isset($product['variants']['nodes'][0]['price']['amount']) ? $product['variants']['nodes'][0]['price']['amount'] : null,
                'currencyCode' => isset($product['variants']['nodes'][0]['price']['currencyCode']) ? $product['variants']['nodes'][0]['price']['currencyCode'] : null,
                "product_from" => $type
            ];
        }

        foreach ($productData as $new_product) {
            $product = Product::where([
                "title" => $new_product["title"],
                "description" => $new_product["description"],
                "image" => $new_product["image"],
                "product_from" => $new_product["product_from"]
            ])->first();
            if (!$product) {
                Product::create($new_product);
            }
        }
        // return response()->json(["message" => "Mobile Active Product has been fetched successfully", "success" => true]);

        return $this->index();
    }

    public function index()
    {
        $products = Product::all();
        return view("dashboard.products.index",["products"=>$products]);
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
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::find($id);
        return view("dashboard.products.update",["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        
        $user = Product::where("id", $id)
                                ->update([
                                    "price" => $request->price,
                                    "in_stock" => $request->in_stock
                                ]);
        
        return redirect()->route("products.index")->with("status","The product has been updated");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route("products.index")->with("status","The product has been deleted");
    }
}
