<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductRequest;
use App\Models\Image;


class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
        return view('dashboard.products.general.index' , compact('products'));
    }

    public function create()
    {
        $data = [];
     
        $categories = Category::select('id','category_name')->get();
        return view('dashboard.products.general.create', compact('categories'));
    }


    public function store(Request $request)
    {

    
        if (!$request->has('is_active'))
            $request->request->add(['is_active' => 0]);
        else
            $request->request->add(['is_active' => 1]);

            $product = new Product();
            $product->product_name      = ['ar' => $request->product_name_ar      ,'en' => $request->product_name__en];
            $product->slug              = ['ar' => $request->slug_ar              , 'en' => $request->slug_en];
            $product->description       = ['ar' => $request->description_ar       , 'en' => $request->description_en];
            $product->short_description = ['ar' => $request->short_description_ar , 'en' => $request->short_description_en];    

            $product->save();

            //save product categories

            $product->categories()->attach($request->categories);

       
        return redirect()->route('admin.products')->with(['success' => __('dashboard.added_successfully')]);


    }

    public function edit($id){

        $product = Product::find($id);

        if(!$product)
            return redirect()->route('admin.products')->with(['error'=>__('dashboard.not_found')]);

        return view('dashboard.products.general.edit',compact('product'));

    }

    public function update($id, Request $request)
    {        

        $product = Product::find($id);
        
        if(!$product)
            return redirect()->route('admin.products')->with(['error' =>__('dashboard.error')]);

        if (!$request->has('is_active'))
            $request->request->add(['is_active' => 0]);
        else
            $request->request->add(['is_active' => 1]);



        $product->update([
            'product_name'      => ['ar' => $request->product_name_ar     , 'en' => $request->product_name_en],
            'slug'              => ['ar' => $request->slug_ar             , 'en' => $request->slug_en],
            'description'       => ['ar' => $request->description_ar      , 'en' => $request->description_en],
            'short_description' => ['ar' => $request->short_description_ar, 'en' => $request->short_description_en],
        ]);
  
        $product->categories()->attach($request->categories);

            

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('admin.products');


    }

    public function destroy($id)
    {
        try{
            //DB
            $product = Product::find($id);
            if(!$product)
                return redirect()->route('admin.products')->with(['error' =>__('dashboard.error')]);

            $product->delete();

            return redirect()->route('admin.products')->with(['success' =>__('dashboard.deleted_successfully')]);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('admin.products')->with(['error' =>__('dashboard.error')]);

        }

    }

    public function getPrice($product_id){

        return view('dashboard.products.prices.create')->with('id',$product_id);
    }

    public function saveProductPrice(Request $request){

        Product::whereId($request ->product_id)->update($request ->only(['price','special_price','special_price_type','special_price_start','special_price_end']));

        return redirect()->route('admin.products')->with(['success' => __('dashboard.updated_successfully')]);        
    }

    
    public function getStock($product_id){

        return view('dashboard.products.stock.create') -> with('id',$product_id) ;
    }

    public function saveProductStock (Request $request){


        Product::whereId($request -> product_id) -> update($request -> except(['_token','product_id']));

        return redirect()->route('admin.products')->with(['success' => __('dashboard.updated_successfully')]);    

    }


    public function addImages($product_id){
        return view('dashboard.products.images.create')->withId($product_id);
    }

    //to save images to folder only
    public function saveProductImages(Request $request ){

        $file = $request->file('dzfile');
        $filename = uploadImage('products', $file);

        return response()->json([
            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),
        ]);

    }

    public function saveProductImagesDB(Request $request)
    {

        // save dropzone images
        if ($request->has('document') && count($request->document) > 0) {
            foreach ($request->document as $image) {
                Image::create([
                    'product_id' => $request->product_id,
                    'photo' => $image,
                ]);
            }
        }

        return redirect()->route('admin.products')->with(['success' => __('dashboard.updated_successfully')]);  
        
    }

}
