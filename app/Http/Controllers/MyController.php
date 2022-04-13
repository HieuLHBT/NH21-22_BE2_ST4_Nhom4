<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MyController extends Controller
{
    function index($name = 'index') {
<<<<<<< HEAD
        $products = Product::all();
       
        return view($name,['data'=>$products]);
    }   

=======
        return view($name);
    }   
>>>>>>> 207e38b4516a38b36a3ebd19469eba2efe46ee50
}