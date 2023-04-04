<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $products = Product::all();
        // dd($products->isNotEmpty());
        return view('welcome', ['products'=>$products]);
    }
}
