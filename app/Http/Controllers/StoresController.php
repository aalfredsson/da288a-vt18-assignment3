<?php
namespace App\Http\Controllers;
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off

use App\Store;
use Illuminate\Support\Facades\DB;

class StoresController extends Controller
{

    public function index(){
      
        $stores = Store::all();
        return response()->json($stores);
    }

}