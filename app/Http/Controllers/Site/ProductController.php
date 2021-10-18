<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProduct($id)
    {

        $product = Product::with(['categories', 'images'])->where('id', $id)->first();


        $related_products = Product::whereHas('categories', function ($cat) use ($product) {
            $cat->whereIn('categories.id', $product);
        })->limit(4)->latest()->get();


        return view('site.products.products', compact('product', 'related_products'));
    }
}
