<?php
namespace App\Http\Controllers;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

use App\Product;
use Illuminate\Support\Facades\DB;

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

  public function create(){
    return "hej";
  }
}