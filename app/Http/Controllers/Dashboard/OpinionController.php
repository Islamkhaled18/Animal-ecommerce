<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\opinion;

class OpinionController extends Controller
{
    public function index(Request $request){
        $opinions = Opinion::first();

        return view('dashboard.opinions.index' ,compact('opinions'));
    }//enf of index

    public function update(Request $request , Opinion $opinions){

        $request->validate([
            'customer_one_name'=>'required',
            'customer_one_job'=>'required',
            'customer_one_opinion'=>'required',
            'customer_two_name'=>'required',
            'customer_two_job'=>'required',
            'customer_two_opinion'=>'required',
        ]);//validation

        $opinions = Opinion::first();


        $opinions->customer_one_name    = $request->customer_one_name;
        $opinions->customer_one_job     = $request->customer_one_job;
        $opinions->customer_one_opinion = $request->customer_one_opinion;
        $opinions->customer_two_name    = $request->customer_two_name;
        $opinions->customer_two_job     = $request->customer_two_job;
        $opinions->customer_two_opinion = $request->customer_two_opinion;
        $opinions->save();


        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();
    }//end of update
}
