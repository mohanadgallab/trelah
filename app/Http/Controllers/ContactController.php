<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $messages = Contact::paginate();

        return view('admin.messages.index', compact('messages'));
        
    }

    public function destroy(Contact $contact){
        $contact->delete() ;
        return redirect()->back()->with('status','Delete Message Successfully');
    }
}
