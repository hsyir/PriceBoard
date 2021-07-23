<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount("products")->get();
        return view("categories.all", compact("categories"));
    }

    public function create()
    {
        return view("categories.create");
    }

    public function edit(Category $category)
    {
        return view("categories.edit", compact("category"));
    }

    public function store(Request $request)
    {
        $category = $request->isMethod("post") ? new Category : Category::find($request->category_id);

        $category->fill($request->all());
        $category->save();

        return redirect()->back()->with(["success" => "done"]);

    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }

    public function categories()
    {
        return new CategoryCollection(Category::with("publishedProducts")->get());
    }
}
