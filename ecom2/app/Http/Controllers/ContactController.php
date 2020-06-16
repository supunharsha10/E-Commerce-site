<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact; 
use Mail; 

class ContactController extends Controller
{

    public function getContact() { 

        return view('contact'); 
      } 
 
    public function saveContact(Request $request) { 
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('dimaathathsarani97@gmail.com');
               });

          return back()->with('success', 'Thank you for contact us!');

    }

    public function viewContact(){

        $contact = Contact::all();

        return view('admin.customerFeedback', ['contact'=>$contact]);
    }
}
