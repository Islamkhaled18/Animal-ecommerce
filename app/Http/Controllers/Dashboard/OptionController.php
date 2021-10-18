<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\product;
use App\Models\Attribute;


class OptionController extends Controller
{
    public function index(){
        $options = Option::paginate(5);
        $products = Product::get();
        $attributes = Attribute::get();

        return view('dashboard.options.index', compact('options'));

    }    
    public function create()
    {
        $data = [];
        $data['products'] = Product::select('id' , 'Product_name')->get();
        $data['attributes'] = Attribute::select('id' , 'attributes_name')->get();

        return view('dashboard.options.create', $data);
    }

    public function store(Request $request)
    {

        $data = [];
        $data['products'] = Product::select('id' , 'Product_name')->get();
        $data['attributes'] = Attribute::select('id' , 'attributes_name')->get();

        $option = new Option();
        $option->option_name  = ['ar'=>$request->option_name_ar ,'en'=>$request->option_name_en ];
        $option->price        = $request->price;
        $option->product_id   = $request->product_id;
        $option->attribute_id = $request->attribute_id;
        $option->save();

        return redirect()->route('admin.options')->with(['success' => __('dashboard.added_successfully')]);
    }


    public function edit($optionId)
    {

        $data = [];
         $data['option'] = Option::find($optionId);

        if (!$data['option'])
            return redirect()->route('admin.options')->with(['error' => __('dashboard.error')]);

        $data['products'] = Product::select('id' , 'Product_name')->get();
        $data['attributes'] = Attribute::select('id' , 'attributes_name')->get();

        return view('dashboard.options.edit', $data);

    }

    public function update(Request $request,$id)
    {
        $option = Option::findOrFail($id);
        $option->update([
            'option_name'  => ['en' => $request->option_name_en , 'ar' =>$request->option_name_ar],
            'price'        => $request->price,
            'product_id'   => $request->product_id,
            'attribute_id'  => $request->attribute_id,
        ]);


        return redirect()->route('admin.options')->with(['success' => __('dashboard.updated_successfully')]);


    }//end of update

    public function destroy($id)
    {

        try {
            //get specific categories and its translations
            $option = Option::orderBy('id', 'DESC')->find($id);

            if (!$option)
                return redirect()->route('admin.options')->with(['error' => __('dashboard.error')]);

            $option->delete();

            return redirect()->route('admin.options')->with(['success' => __('dashboard.deleteded_successfully')]);

        } catch (\Exception $ex) {
            return redirect()->route('admin.options')->with(['error' => __('dashboard.error')]);
        }
    }



}
