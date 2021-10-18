<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $carts = Cart::paginate(4);
        return view('dashboard.carts.index', compact('carts'));
    } //end of index

    public function store(Request $request, Product $product_id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            'Governorate' => 'required',
            'country' => 'required',
            'post_address' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'email_address' => 'required|email',
            'shipping_method' => 'required',

        ]); //validation

        $pr = Cart::where('product_id', auth::id())->get();

        foreach ($pr as $pas) {
            $pas->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'city' => $request->city,
                'Governorate' => $request->Governorate,
                'country' => $request->country,
                'post_address' => $request->post_address,
                'address' => $request->address,
                'phone' => $request->phone,
                'email_address' => $request->email_address,
                'shipping_method' => $request->shipping_method,
                'payment_method' => $request->payment_method,
                'product_quantity'=>'1',
            ]);
        }

        
    } //end of store cart data that send from user's website un database

    public function destroy($id, Cart $carts)
    {
        $carts->find($id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->back();
    } //end of delete messages
}
