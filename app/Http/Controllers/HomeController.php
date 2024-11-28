<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\News;
use App\Models\ChiefDesigner;
use App\Models\Airplane;
use App\Models\Contact;
use App\Models\History; 
use App\Models\SocialLink; // Tambahkan import untuk model SocialLink

class HomeController extends Controller
{
    public function index()
    {
        $industries = Industry::all(); 
        $news = News::all(); 
        $chiefDesigners = ChiefDesigner::all();
        $airplanes = Airplane::all(); 
        $contacts = Contact::all(); 
        $histories = History::all(); 
        $socialLinks = SocialLink::all(); // Ambil semua data SocialLink

        return view('index', compact('industries', 'news', 'chiefDesigners', 'airplanes', 'contacts', 'histories', 'socialLinks'));
    }
}