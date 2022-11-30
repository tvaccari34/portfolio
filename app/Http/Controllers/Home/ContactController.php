<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function Contact(){
        return view('frontend.contact');
    }

    public function StoreContactMessage(Request $request){
        Contact::insert([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_subject' => $request->contact_subject,
            'contact_phone' => $request->contact_phone,
            'contact_message' => $request->contact_message,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your message submitted successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function ContactMessage(){
        $contactMessages = Contact::latest()->get();
        return view('admin.contact.all_messages', compact('contactMessages'));
    }

    public function GetMessage($id){
        $message = Contact::findOrFail($id);
        return view('admin.contact.view_message', compact('message'));
    }
}
