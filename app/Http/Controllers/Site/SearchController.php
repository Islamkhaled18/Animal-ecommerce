<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function get(Request $request){
        $searchResult = Product::when($request->search , function($q) use ($request){

            return $q->where('product_name', 'like', '%' . $request->search . '%');
                
        })->first();

        return view('site.search.search', compact('searchResult'));

    }
}
