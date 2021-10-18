<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(Request $request)
    {

        $service = Service::first();
        return view('dashboard.services.index', compact('service'));
    }


    public function Update(Request $request)
    {

        $service = Service::first();


        if ($service) {
            Service::where('id', 1)->update([
                'description'    => ['en' => $request->description_en, 'ar' => $request->description_ar],
                'service_one'     => ['en' => $request->service_one_en, 'ar' => $request->service_one_ar],
                'service_two'     => ['en' => $request->service_two_en, 'ar' => $request->service_two_ar],
                'email'    => $request->email,
                'phone'     => $request->phone,
            ]);
        }

        session()->flash('success', __('dashboard.updated_successfully'));
        return redirect()->back();
    } //end of update
}
