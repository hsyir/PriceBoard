<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function priceBoard()
    {
        return new ProductCollection(Product::all());
    }

    public function index()
    {
        $products = Product::all();
        return view("products.all", compact("products"));
    }

    public function create()
    {
        return view("products.create");
    }

    public function edit(Product $product)
    {
        return view("products.edit", compact("product"));
    }

    public function store(Request $request)
    {
        $product = $request->isMethod("post") ? new Product : Product::find($request->product_id);


        $product->fill($request->all());
        $product->save();

        return redirect()->back()->with(["message" => "done"]);

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

}
