<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertise;

class AdvertiseController extends Controller
{
    public function index(Request $request){

        $adv = Advertise::first();
        return view('dashboard.advertises.index',compact('adv'));

    }


    public function Update(Request $request)
    {

        $adv = Advertise::first();

        if ($request->hasFile('adv_one')){
            $imageName = $request->adv_one->getClientOriginalName();
            $imageExt = $request->adv_one->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->adv_one->move('uploads/advertises', $imageName);
            $adv_one_value = $path;
        }else{
            $adv_one_value = '';
        }//end of save image
        //

        if ($request->hasFile('adv_two')){
            $imageName = $request->adv_two->getClientOriginalName();
            $imageExt = $request->adv_two->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->adv_two->move('uploads/advertises', $imageName);
            $adv_two_value = $path;
        }else{
            $adv_two_value = '';
        }//end of save image

        

        if ($adv){
            Advertise::where('id',1)->update([
                'adv_one'=> $adv_one_value,
                'adv_two'=> $adv_two_value,
            ]);
        }

        session()->flash('success', __('dashboard.updated_successfully'));
        return redirect()->back();
    }//end of update
}
