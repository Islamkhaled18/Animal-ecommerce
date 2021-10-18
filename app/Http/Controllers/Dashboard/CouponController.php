<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Requests\CouponRequest;

class CouponController extends Controller
{
    public function index(){
        $coupons = Coupon::get();

        return view('dashboard.coupons.index', compact('coupons'));

    }    
    public function create()
    {

        return view('dashboard.coupons.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'coupon_code' => ['required'],
            'coupon_value' => ['required'],

        ]);

        $coupons = Coupon::get();
        $coupon = new Coupon();
        $coupon->coupon_code        = $request->coupon_code;
        $coupon->coupon_value        = $request->coupon_value;
        $coupon->save();

        return redirect()->route('admin.coupons')->with(['success' => __('dashboard.added_successfully')]);
    }


    public function edit($couponId)
    {

        $data = [];
         $data['coupon'] = Coupon::find($couponId);

        if (!$data['coupon'])
            return redirect()->route('admin.coupons')->with(['error' => __('dashboard.error')]);

        $data['coupons'] = Coupon::select('id' , 'coupon_code' , 'coupon_value')->get();
        

        return view('dashboard.coupons.edit', $data);

    }

    public function update(Request $request,$id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->update([
            
            'coupon_code'        => $request->coupon_code,
            'coupon_value'        => $request->coupon_value,
            
        ]);


        return redirect()->route('admin.coupons')->with(['success' => __('dashboard.updated_successfully')]);


    }//end of update

    public function destroy($id)
    {

        try {
            //get specific categories and its translations
            $coupon = Coupon::find($id);

            if (!$coupon)
                return redirect()->route('admin.coupons')->with(['error' => __('dashboard.error')]);

            $coupon->delete();

            return redirect()->route('admin.coupons')->with(['success' => __('dashboard.deleted_successfully')]);

        } catch (\Exception $ex) {
            return redirect()->route('admin.coupons')->with(['error' => __('dashboard.error')]);
        }
    }

}
