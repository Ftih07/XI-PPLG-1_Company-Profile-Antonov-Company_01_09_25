<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function show()
    {
        $contacts = Contact::all();  
        return view('index', compact('contacts'));  
    }
}
