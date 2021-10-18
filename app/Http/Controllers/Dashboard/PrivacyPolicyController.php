<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index(Request $request){
        $policy = PrivacyPolicy::first();

        return view('dashboard.policies.index',compact('policy'));
    }

    public function update(Request $request){
        $policy = PrivacyPolicy::first();


        if ($policy){
            PrivacyPolicy::where('id',1)->update([
                'main_text'    => [ 'en'=>$request->main_text_en    ,'ar'=>$request->main_text_ar ],
                'text_one'     => [ 'en'=>$request->text_one_en     ,'ar'=>$request->text_one_ar ],
                'text_two'     => [ 'en'=>$request->text_two_en     ,'ar'=>$request->text_two_ar ],
                'text_three'   => [ 'en'=>$request->text_three_en   ,'ar'=>$request->text_three_ar ],
                'text_four'    => [ 'en'=>$request->text_four_en    ,'ar'=>$request->text_four_ar ],
                'text_five'    => [ 'en'=>$request->text_five_en    ,'ar'=>$request->text_five_ar ],
                'text_six'     => [ 'en'=>$request->text_six_en     ,'ar'=>$request->text_six_ar ],
                'text_seven'   => [ 'en'=>$request->text_seven_en   ,'ar'=>$request->text_seven_ar ],
                'text_eight'    => [ 'en'=>$request->text_eight_en   ,'ar'=>$request->text_eight_ar ],
            ]);
        }

        session()->flash('success', __('dashboard.updated_successfully'));
        return redirect()->back();


    }

}
