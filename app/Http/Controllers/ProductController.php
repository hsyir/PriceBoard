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

        $this->validate($request, [
            "name" => "required",
            "price" => "required",
            "unit" => "required",
            "category_id" => "required",
        ]);

        $product->fill($request->all());
        $product->save();

        if ($request->isMethod("post"))
            return redirect()->to(route("products.index"))->with(["success" => "done"]);

        return redirect()->back()->with(["success" => "done"]);

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back();
    }

    public function reorder(Request $request)
    {
        foreach ($request->data as $product_id => $d) {
            $product = Product::find($product_id);
            if($product){
                $product->order = $d["order"];
                $product->name = $d["name"];
                $product->category_id = $d["category_id"];
                $product->save();
            }
        }

        return redirect()->back()->with(["success"=>"Done"]);
    }

}
