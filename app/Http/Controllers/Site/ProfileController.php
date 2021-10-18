<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use App\Models\Reservation;
use App\Models\ShippingAddress;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);
        $profile = Profile::where('user_id',$id)->first();
        $profile = User::find($id)->profile;
        $reservations_details = Reservation::where('user_id',$id)->get();
        $adressess = ShippingAddress::where('user_id',$id)->get();
        return view('site.profile.profile',compact('user' , 'profile','reservations_details' , 'adressess'));
    }

    public function edit($id){

        
        $profile = User::find($id)->profile;
        $user    = User::find($id);        
        $profile = Profile::where('user_id',$id)->first();

        if(!$profile){
            $profile =  Profile::create([
                'user_id' => auth()->user()->id,
            ]);
        }
       
        return view('site.profile.editProfile', compact('user','profile'));  
      }



    public function Update(Request $request)
    {

        $id = auth()->user()->id;
        $profile = Profile::where('user_id',$id)->first();
        $user = User::first();
        $profile = User::find($id)->profile;


        if ($request->hasFile('user_photo')){
            $imageName = $request->user_photo->getClientOriginalName();
            $imageExt = $request->user_photo->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->user_photo->move('uploads/userProfile', $imageName);
            $user_photo_value = $path;
        }else{
            $user_photo_value = '';
        }//end of save image
        
        

        if ($profile){
            Profile::where('user_id',$id)->update([                
                'user_photo'     => $user_photo_value,
                'user_name'       => $request->user_name,
                'user_email'       => $request->user_email,

            ]);
        }

        if ($user){
            User::where('id',$id)->update([                
                'mobile'     => $request->mobile,
                'password'       => bcrypt($request->password),

            ]);
        }

        session()->flash('success', __('dashboard.updated_successfully'));
        return redirect()->back();
    }//end of update


}
