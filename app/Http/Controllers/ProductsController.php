<?php
namespace App\Http\Controllers;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

use App\Product;
use App\ProductStore;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
  
    public function index(){
      
        $products = Product::all();
        return response()->json($products);
    }
    public function show($id){
        $product = Product::find($id);
        foreach ($product->reviews as $review)
        {
          $product->reviews = $review;
        }

        $product->stores = $product->stores;

        return response()->json($product);
    }

    public function create(Request $request){
        /*$product_store = [];
        foreach ($request->input("stores") as $store) {
            array_push($product_store, $store);
        } */
        $product = new Product;
        $product->setAttribute('title', $request->input("title"));
        $product->setAttribute('id', $request->input("id"));
        $product->setAttribute('price', $request->input("price"));
        $product->setAttribute('brand', $request->input("brand"));
        $product->setAttribute('image', $request->input("image"));
        $product->setAttribute('description', $request->input("description"));
        $product->save();

        foreach ($request->get("stores") as $store) {
          $productStore = new ProductStore;
          $productStore->setAttribute('product_id', $product->id);
          $productStore->setAttribute('store_id', $store);
          $productStore->save();
          
        } 

        $response = ['success' => true];

        return response()->json($response);
      
    }
}