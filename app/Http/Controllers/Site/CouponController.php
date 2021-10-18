<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function store(Request $request){

        $coupon = Coupon::where('coupon_code' ,$request->coupon_code)->first();
        if(!$coupon){
            return redirect()->route('cart')->with(['error'=>__('dashboard.not_found')]);
        }

        session()->put([
            'coupon_code' => $coupon->coupon_code,
            'coupon_value' => $coupon->coupon_value
        ]); 

        return redirect()->route('cart')->with(['success'=>__('dashboard.added_successfully')]);

    }


    public function destroy(){

       session()->forget(['coupon_code','coupon_value']);

        return redirect()->route('cart')->with(['success'=>'Removed']);

    }
}
