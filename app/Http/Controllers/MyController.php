<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
<<<<<<< HEAD
use App\Models\Manufacturer;

class MyController extends Controller
{
    function index($name = 'index')
    {
        $newproducts = Product::orderBy('create_at', 'desc')->take(10)->get();
        $newproduct1 = Product::where('manu_id', 1)->orderBy('create_at', 'desc')->take(3)->get();
        $newproduct2 = Product::where('manu_id', 2)->orderBy('create_at', 'desc')->take(3)->get();
        $newproduct3 = Product::where('manu_id', 3)->orderBy('create_at', 'desc')->take(3)->get();
        $topsellings = Product::where('quantity', '>=', 15)->get();
        $topselling1 = Product::where('manu_id', 1)->orderBy('quantity', 'asc')->where('quantity', '>=', 10)->get();
        $topselling2 = Product::where('manu_id', 2)->orderBy('quantity', 'asc')->where('quantity', '>=', 10)->get();
        $topselling3 = Product::where('manu_id', 3)->orderBy('quantity', 'asc')->where('quantity', '>=', 10)->get();
        $manu1 = Manufacturer::where('manu_id', 1)->first();
        $manu2 = Manufacturer::where('manu_id', 2)->first();
        $manu3 = Manufacturer::where('manu_id', 3)->first();
        $manu1_product = Manufacturer::find(1)->products()->first();
        $manu2_product = Manufacturer::find(2)->products()->first();
        $manu3_product = Manufacturer::find(3)->products()->first();
        if ($name == "index") {
            return view('index', [
                'newproducts' => $newproducts,
                'newproduct1' => $newproduct1,
                'newproduct2' => $newproduct2,
                'newproduct3' => $newproduct3,
                'topsellings' => $topsellings,
                'topselling1' => $topselling1,
                'topselling2' => $topselling2,
                'topselling3' => $topselling3,
                'manu1' => $manu1,
                'manu2' => $manu2,
                'manu3' => $manu3,
                'manu1_product' => $manu1_product,
                'manu2_product' => $manu2_product,
                'manu3_product' => $manu3_product,
            ]);
        }
        return view($name);
    }
}
=======

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
>>>>>>> c6d3ab907315ca81168c6631f4d576684bb58007
