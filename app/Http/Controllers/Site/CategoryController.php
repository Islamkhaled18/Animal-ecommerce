<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class CategoryController extends Controller
{

  // public function productsById($id)
  // {

  //   $category = Category::with('products')->where('id', $id)->first();
  //   return view('site.category.category', compact('category'));
  // }



  public function index(Request $request)
  {

    // /allcatories?category_id=1;
    $categoryId = $request->category_id;


    $allcategories = Category::with('products')->get();
    $categories = Category::all();

    if ($categoryId) {
      $products = Category::with('products')->find($categoryId)->products;
    } else {

      $products = Product::all();
    }
    
    return view('site.category.category', compact('allcategories' , 'products'));
  }
}




















    // $company = Company::with(['company_control_panel','company_owner','company_specialization','company_address' => function($query) {
    // $query->with(['country_info', 'province_info', 'city_info', 'postal_code_info']);
    // }, 'company_all_subscriptions' => function($query) {
    // $query->with(['main_service_description','sub_service_description','custom_tariff_details']);
    // }])
    // ->firstOrFail();


    // $categories = Category::with(['products' => function ($q) {
    //     $q->select('product_name','slug','price','special_price','');
    // }])->get();