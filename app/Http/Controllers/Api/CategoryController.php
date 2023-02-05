<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CategoryCollection;
use App\Http\Resources\Category as ResourcesCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all()
    {
        $categories = Category::all();
        return (new CategoryCollection($categories))->keyBy("id");
        /* 
        $categories = Category::with("publishedProducts")->get();
        return (ResourcesCategory::collection($categories))->keyBy("id"); */
    }
}
