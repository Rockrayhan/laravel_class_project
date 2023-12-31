<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index()
    {
        // echo "All Categories";
        $data['cats'] = Category::all();
        return view('backend/category/index', $data);
    }



    public function create()
    {
        return view('backend/category/create');
    }

 

    public function store(Request $request)
    {
        $data = ['name' => $request->name];
        print_r($data); //check if data is getting

        if(Category::insert($data)){
            return redirect('/product')->with('msg' , 'successfully Category Added');
        }

        // DB::table('categories')->insert($data); // connect with db directly without model
    }


    public function show(string $id)
    {
        //
    }


    public function edit($id)
    {

    }



    public function update(Request $request, string $id)
    {
        //
    }



    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/category')->with('msg' , 'Deleted SuccessFully');
    }
}
