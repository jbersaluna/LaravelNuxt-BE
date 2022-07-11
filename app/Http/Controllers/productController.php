<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    //
    public function index(Request $request){
        $products = \DB::table('products')
        ->leftJoin('categories', 'products.category', '=', 'categories.id')
        ->select('products.*', 'categories.id as category_id', 'categories.name as category_name')
        ->get();
        return response()->json($products);
    }

    //
    public function create(Request $request)
    {
        try{

            $product = $request->all();
            $response = Product::create($product);
            return response($response);
        }catch(e) {
            return response(e);
        }
    }

    //
    public function update(Request $request)
    {
        //
        $product = Product::where('id', $request->id)
       ->update([
           'name' => $request->name,
           'description' => $request->description,
           'price' => $request->price,
           'quantity' => $request->quantity,
       ]);
       return response($product);
    }

    //
    public function retrieveProductById($id)
    {
        $product = Product::where('id', '=', $id)->get();
        return response($product);
    }

    //
    public function destroy($id)
    {
        //
        $product = Product::destroy($id);
        return response($product);
    }
}
