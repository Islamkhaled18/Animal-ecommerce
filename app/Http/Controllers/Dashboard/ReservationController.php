<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function index(Request $request)
    {
        $reservations = Reservation::paginate(10);
        return view('dashboard.reservations.index', compact('reservations'));
    } //end of index

    public function store(Request $request)
    {

        Reservation::create([
            'service_name' => $request->service_name,
            'animal_type' => $request->animal_type,
            'animal_number' => $request->animal_number,
            'payment_method' => $request->payment_method,
            'reservation_date' => $request->reservation_date,
            'payment_type' => $request->payment_type,
            'user_id' =>auth()->user()->id,
        ]);

        session()->flash('success', __('site.sent_successfully'));
        return redirect()->back();
    } //end of store messages that send from user's website un database

    public function destroy($id, Reservation $reservations)
    {
        $reservations->find($id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->back();
    } //end of delete messages


}
