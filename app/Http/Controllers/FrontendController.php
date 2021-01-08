<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Order;

class FrontendController extends Controller
{
    public function index($value='')
   {
      $categories = Category::inRandomOrder()->take(6)->get();
      $selection_product1 = Product::where('id',65)->get();
      $selection_product2 = Product::where('id',23)->get();
      $selection_product3 = Product::where('id',51)->get();
      $selection_product4 = Product::where('id',69)->get();
      $selection_product5 = Product::where('id',44)->get();
      $selection_product6 = Product::where('id',62)->get();
      $selection_product7 = Product::where('id',8)->get();
      $selection_product8 = Product::where('id',39)->get();
      //$selection_product9 = Product::where('id',1)->get();
      return view('frontend.index',compact('selection_product1','selection_product2','selection_product3','selection_product4','selection_product5','selection_product6','selection_product7','selection_product8','categories'));
   }
   public function about($value='')
   {
      
      return view('frontend.about');
   }
   public function register($value='')
   {
      
   	return view('frontend.register');
   }

   public function login($value='')
   {
      
   	return view('frontend.login');
   }

   public function checkout($value='')
   {
      $category_product = Category::all();
      //$product= Product::orderby('id','desc')->get();
      $products=Product::all();
      $categories=Category::all();
      return view('frontend.checkout',compact('category_product','products','categories'));
   }

    public function productdetail($id)
   {
      $product_detail=Product::find($id);
      $category_id= $product_detail->category_id;
      $categories=Category::all();
      $related_products= Product::where('category_id',$category_id)->take(4)->get();
   	return view('frontend.productdetail',compact('product_detail','related_products','categories'));
   }

   public function mailus($value='')
   {
      
   	return view('frontend.mailus');
   }

   public function shop($value='')
   {
      $products=Product::all();
   	return view('frontend.shop',compact('products'));
   }

   public function product($id)
   {
      //dd($id);
      $category_product = Category::find($id);
      $product_detail = Product::find($id);
      $products=Product::all();
      $categories=Category::all();
      return view('frontend.product',compact('category_product','products','categories','product_detail'));
   }

}
