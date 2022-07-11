<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    //
    public function index(Request $request){
        $categories = Category::get();
        return response()->json($categories);
    }

    //
    public function create(Request $request)
    {
        try{

            $category = $request->all();
            $response = Category::create($category);
            return response($response);
        }catch(e) {
            return response(e);
        }
    }

    //
    public function update(Request $request)
    {
        //
        $category = Category::where('id', $request->id)
       ->update([
           'name' => $request->name,
       ]);
       return response($category);
    }

    //
    public function retrieveCategoryById($id)
    {
        $category = Category::where('id', '=', $id)->get();
        return response($category);
    }

    //
    public function destroy($id)
    {
        //
        $category = Category::destroy($id);
        return response($category);
    }
}
