<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\follower;

class FollowerController extends Controller
{
    public function index(Request $request)
    {
        $followers = Follower::when($request->search, function ($query) use ($request){

            return $query->where('follower_email', 'like','%' . $request->search . '%' );
        })->paginate(4);
        return view('dashboard.followers.index', compact('followers'));

    }//end of index

    public function store(Request $request){

        $request->validate([
            'follower_email' => 'required|email',
        ]);//validation

        Follower::create($request->all());

        session()->flash('success', __('site.sent_successfully'));
        return redirect()->back();


    }//end of store messages that send from user's website un database

    public function destroy($id , Follower $followers)
    {
        $followers->find($id)->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->back();
    }//end of delete messages





}
