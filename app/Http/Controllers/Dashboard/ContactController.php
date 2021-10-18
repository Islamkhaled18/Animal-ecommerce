<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request){

        $contact = Contact::first();
        return view('dashboard.contacts.index',compact('contact'));

    }


    public function Update(Request $request)
    {

        $contact = Contact::first();


        if ($request->hasFile('photo')){
            $imageName = $request->photo->getClientOriginalName();
            $imageExt = $request->photo->getClientOriginalExtension();
            $newName = uniqid('',true) . '.' . $imageExt ;
            $path = $request->photo->move('uploads/contact', $imageName);
            $photo_value = $path;
        }else{
            $photo_value = '';
        }//end of save image
        
        if ($contact){
            contact::where('id',1)->update([
                'address'   => [ 'en'=>$request->address_en ,'ar'=>$request->address_ar ],
                'phone_one' => $request->phone_one,
                'phone_two' => $request->phone_two,
                'email_one' => $request->email_one,
                'email_two' => $request->email_two,
                'map'       =>$request->map,
                'photo'    => $photo_value,
            ]);
        }

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->back();
    }//end of update



    public function get(Request $request){

        $contacts = Contact::when($request->search, function ($query) use ($request){

            return $query->where('sender_name', 'like','%' . $request->search . '%' )
                ->orwhere('sender_email', 'like','%' . $request->search . '%' );

        })->paginate(4);
        return view('dashboard.contacts.contact',compact('contacts'));
    }



    public function store(Request $request){

        $request->validate([
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'sender_phone' =>'required',
            'sender_message' => 'required|min:5',
        ]);//validation

        Contact::create($request->all());
        session()->flash('success', __('dashboard.sent_successfully'));
        return redirect()->back();


    }//end of store messages that send from user's website un database



    public function read($id)
    {
        
        $contact = Contact::find($id);
        $contact->update(['view' => 1]);

        return view('dashboard.contacts.showMessage' ,compact('contact'));
    }//end of show message



    public function destroy($id , Contact $Contact){

        $contact->find($id)->delete();
        return Redirect::back()->withFlashMessage(__('dashboard.deleted_successfully'));

    }//end of delete messages




}
