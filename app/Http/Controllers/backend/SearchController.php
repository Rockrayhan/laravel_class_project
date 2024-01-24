<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(Request $request): View
    {

        if ($request->filled('search')) {
            $products = Product::search($request->search)->get();
        } else {
            $products = Product::all();
        }
        return view('backend.product.search', compact('products'));
    }
}
