<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function create(){
    return view('product/create');
   }

   public function store(Request $request){
    // dd($request->all());

    $name =$request->input('name');
    $brand =$request->input('brand');
    $description =$request->input('description');
    $price =$request->input('price');


    //?METODO SAVE
    $product = new Product();
    $product->name = $name;
    $product->brand = $brand;
    $product->description = $description;
    $product->price = $price;
    $product->save();

    // $product->save();
    return redirect()->route('homepage');

    // dd('controlla table');

   }

   public function getProductsByBrand($brand){
    $products = Product::where('brand' , $brand)->get();
    return view('product/brand', ['products' => $products]);
   }
}
