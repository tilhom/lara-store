<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
 	  	$products = Product::inRandomOrder()->take(8)->get();
        return view('index')->with('products', $products);
    }
}
