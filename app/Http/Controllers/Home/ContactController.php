<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function Contact()
    {
        return view('admin.contact');
    }
    
    public function StoreMessage(Request $request)
    {

        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Message sent Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function ContactMessage()
    {
        $messages = Contact::latest()->get();
        return view('admin.contact.allcontact', compact('messages'));
    }

    public function DeleteMessage($id)
    {
        DB::table('contacts')->where('id','=',$id)->delete();
        $notification = array(
            'message' => 'Message Deleted Successfully',
            'alert-type' => 'success' 
        );

        return redirect()->back()->with($notification);
    }
}