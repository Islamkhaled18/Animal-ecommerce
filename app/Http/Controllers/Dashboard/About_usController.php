<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_us;

class About_usController extends Controller
{
    public function index(Request $request){

        $about_us = About_us::first();
        return view('dashboard.about_us.index',compact('about_us'));

    }


    public function Update(Request $request)
    {

        $about_us = About_us::first();


        if ($request->hasFile('main_photo')){
            $imageName = $request->main_photo->getClientOriginalName();
            $imageExt = $request->main_photo->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->main_photo->move('uploads/about_us', $imageName);
            $main_photo_value = $path;
        }else{
            $main_photo_value = '';
        }//end of save image
        //

        if ($request->hasFile('sub_photo')){
            $imageName = $request->sub_photo->getClientOriginalName();
            $imageExt = $request->sub_photo->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->sub_photo->move('uploads/about_us', $imageName);
            $sub_photo_value = $path;
        }else{
            $sub_photo_value = '';
        }//end of save image

        

        if ($about_us){
            About_us::where('id',1)->update([
                'main_title'    => [ 'en'=>$request->main_title_en    ,'ar'=>$request->main_title_ar ],
                'main_text'     => [ 'en'=>$request->main_text_en     ,'ar'=>$request->main_text_ar ],
                'sub_title'     => [ 'en'=>$request->sub_title_en     ,'ar'=>$request->sub_title_ar ],
                'sub_text'      => [ 'en'=>$request->sub_text_en      ,'ar'=>$request->sub_text_ar ],
                'main_photo'    => $main_photo_value,
                'sub_photo'     => $sub_photo_value,
                'youtube'       => $request->youtube,

            ]);
        }

        session()->flash('success', __('dashboard.updated_successfully'));
        return redirect()->back();
    }//end of update
}
