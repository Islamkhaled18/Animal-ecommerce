<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingAddress;

class ShippingAddressController extends Controller
{
    public function store(Request $request)
    {
       

        $addresses = ShippingAddress::create([
            'country' => $request->country,
            'governorate' => $request->governorate,
            'city' => $request->city,
            'street' => $request->street,
            'address' => $request->address,
            'user_id' =>auth()->user()->id,
        ]);



        if ($addresses) {
            return true;
        } else {
            return false;
        }
    } //end of store messages that send from user's website un database
}
