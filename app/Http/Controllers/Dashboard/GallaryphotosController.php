<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallaryphoto;

class GallaryphotosController extends Controller
{
    public function addImages(){

        $photos = Gallaryphoto::get(['photo']);
        return view('dashboard.gallaryphotos.index',compact('photos'));
    }

   //to save images to folder only
   public function saveGallaryImages(Request $request)
   {

       $file = $request->file('dzfile');
       $filename = uploadImage('gallaryphotos', $file);

       return response()->json([
           'name' => $filename,
           'original_name' => $file->getClientOriginalName(),
       ]);

   }

   public function saveGallaryImagesDB(Request $request)
   {

       try {
           // save dropzone images
           if ($request->has('document') && count($request->document) > 0) {
               foreach ($request->document as $image) {
                Gallaryphoto::create([
                       'photo' => $image,
                   ]);
               }
           }

           return redirect()->back()->with(['success' => __('dashboard.add_successfully')]);

       } catch (\Exception $ex) {

       }
    }

}
