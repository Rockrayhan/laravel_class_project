<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::all();
        return view('backend/product/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['cats'] =  Category::all();
        return view('backend.product.create', $data);
    }


    public function store(Request $request)
    {

        // left side = input field | right side = rules 
        // $validate = $request->validate([
        //     'name' => 'required | min:3',
        //     'desc' => 'required | min:6',
        //     'price' => 'required | numeric',
        //     'category' => 'required',
        //     'photo' => 'mimes:jpg,jpeg,png',
        // ]);

        // if ($validate) {
            // left side = db field | right side = input field
            $data = [
                'name' => $request->name,
                'description' => $request->desc,
                'price' => $request->price,
                'category_id' => $request->category,
            ];
            print_r($data); //check if data is getting

            if (Product::insert($data)) {
                return redirect('/product')->with('msg', 'successfully Product Added');
            }
        // }
    }


    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
