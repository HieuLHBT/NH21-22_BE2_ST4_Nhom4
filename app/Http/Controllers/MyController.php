<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MyController extends Controller
{
<<<<<<< HEAD
    function index($name = 'tesst') {
        $data = Product::all();
        $products = Product::where('name', '=', $name);
        $newproducts = Product::orderBy('manu_id','desc')->take(10)->get();
        return view($name, ['data'=>$products],['newproducts'=>$newproducts]);
    }
=======
    function index($name = 'index') {
<<<<<<< HEAD
        $products = Product::all();
       
        return view($name,['data'=>$products]);
    }   

=======
        return view($name);
    }   
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
>>>>>>> 4c7d1aa5cb90f964149f542c10252e1643ebbbec
}