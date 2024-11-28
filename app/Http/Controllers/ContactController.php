<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function show()
    {
        $contacts = Contact::all();  // Mengambil semua data kontak
        return view('index', compact('contacts'));  // Menampilkan data di view 'contact.blade.php'
    }
}
