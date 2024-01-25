<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(Request $request): View
    {   
        $categories = Category::all();

        if ($request->filled('search')) {
            $products = Product::search($request->search)->get();  // search without category
            // $products = Product::search($request->search)->where('category_id', $request->cat)->get();  // search with category
        } else {
            $products = Product::all();
        }
        return view('backend.product.search', compact('products', 'categories'));
    }
}
