<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;

class AttributeController extends Controller
{
    public function index(){
        $attributes = Attribute::paginate(5);

        return view('dashboard.attributes.index',compact('attributes'));
    }

    public function create(){
        return view('dashboard.attributes.create');

    }

    public function store(Request $request ,Attribute $attribute){


        $attribute = Attribute::first();

        $attribute = new Attribute();
                
        $attribute->attributes_name   = ['ar' => $request->attributes_name_ar , 'en' => $request->attributes_name_en];

        $attribute->save();

        //save product Attribute
   
        return redirect()->route('admin.attributes')->with(['success' => __('dashboard.added_successfully')]);

    }


    public function edit($id){
        $attribute = Attribute::find($id);

        if (!$attribute)
            return redirect()->route('admin.attributes')->with(['error'=>__('dashboard.error')]);

        return view('dashboard.attributes.edit', compact('attribute'));  
      }

      public function update($id, Request $request){
        $attribute = Attribute::find($id);

        if (!$attribute)
            return redirect()->route('admin.attributes')->with(['error'=>__('dashboard.error')]);

            $attribute->update([

               'attributes_name'   => ['ar' => $request->attributes_name_ar , 'en' => $request->attributes_name_en],

            ]);

            return redirect()->route('admin.attributes')->with(['success' => __('dashboard.added_successfully')]);



      }



      public function destroy($id)
      {
          try {
              //get specific categories and its translations
              $attribute = Attribute::find($id);
  
              if (!$attribute)
                  return redirect()->route('admin.attributes')->with(['error'=>__('dashboard.error')]);
  
              $attribute->delete();
  
              return redirect()->route('admin.attributes')->with(['success'=>__('dashboard.deleted_successfully')]);
  
          } catch (\Exception $ex) {
              return redirect()->route('admin.attributes')->with(['error'=>__('dashboard.error')]);
          }
      }


}
