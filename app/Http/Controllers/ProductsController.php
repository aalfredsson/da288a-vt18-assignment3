<?php
namespace App\Http\Controllers;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

use App\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
  /*
  public function index(){
    $movies = DB::table('movies')->get();
    return response()->json($movies);
  }
  public function show($id){
    $movie = DB::table('movies')->find($id);
    return response()->json($movie);
  }
  */



  public $products;
 /*
  public function __construct() {
    $this->products = json_decode(file_get_contents("../resources/products"));
  }
  */
  public function index(){
    
    $products = Product::all();
    return response()->json($products);
  }
  public function show($id){
    $product = Product::find($id);
    
    $product->review = $product->review;
    $product->stores = $product->stores;

    return response()->json($product);
  }
}