<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MyController extends Controller
{
    function index($name = 'tesst') {
        $data = Product::all();
        $products = Product::where('name', '=', $name);
        $newproducts = Product::orderBy('manu_id','desc')->take(10)->get();
        return view($name, ['data'=>$products],['newproducts'=>$newproducts]);
    }
}