<?php
namespace App\Http\Controllers;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

use App\Review;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{

  public function index(){
    
    $reviews = Review::all();
    return response()->json($reviews);
  }

}