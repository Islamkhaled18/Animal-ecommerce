<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function home()
    {

        $categories = Category::where('parent_id', null)->select('id', 'category_name', 'slug')->with(['childrens' => function ($q) {
            $q->select('id', 'category_name', 'parent_id', 'slug');
            $q->with(['childrens' => function ($qq) {
                $qq->select('id', 'parent_id', 'category_name', 'slug');
            }]);
        }])->get();
        // best sellings
        $items = DB::table('carts')->select('product_quantity', DB::raw('COUNT(product_id) as count'))->groupBy('product_quantity')->orderBy('count', 'desc')->get();
        $product_ids = [];
        foreach ($items as $item) {
            array_push($product_ids, $item->product_quantity);
        }
        $best_sellings = Product::whereIn('id', $product_ids)->get();


        //new arrival
        $pros = Product::orderBy('id','desc')->get();
        return view('site.home', compact('categories', 'best_sellings' , 'pros'));
    }

    public function welcome()
    {

        $categories = Category::where('parent_id', null)->select('id', 'category_name', 'slug')->with(['childrens' => function ($q) {
            $q->select('id', 'category_name', 'parent_id', 'slug');
            $q->with(['childrens' => function ($qq) {
                $qq->select('id', 'parent_id', 'category_name', 'slug');
            }]);
        }])->first();

        return view('site.welcome', compact('categories'));
    }
}
