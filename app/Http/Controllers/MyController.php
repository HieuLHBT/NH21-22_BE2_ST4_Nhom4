<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MyController extends Controller
{
    function index($name = 'index') {
        $products = Product::all();
       
        return view($name,['data'=>$products]);
    }   

}