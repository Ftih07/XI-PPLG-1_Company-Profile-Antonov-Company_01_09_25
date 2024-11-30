<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\News;
use App\Models\ChiefDesigner;
use App\Models\Airplane;
use App\Models\Contact;
use App\Models\History;
use App\Models\SocialLink; 
use App\Models\AerodynamicResearch; 

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
        $socialLinks = SocialLink::all(); 

        $data1 = AerodynamicResearch::where('section', 1)->get();
        $data2 = AerodynamicResearch::where('section', 2)->get();
        $data3 = AerodynamicResearch::where('section', 3)->get();
        $data4 = AerodynamicResearch::where('section', 4)->get();
        $data5 = AerodynamicResearch::where('section', 5)->get();
        $data6 = AerodynamicResearch::where('section', 6)->get();

        return view('index', compact('industries', 'news', 'chiefDesigners', 'airplanes', 'contacts', 'histories', 'socialLinks', 'data1', 'data2', 'data3', 'data4', 'data5', 'data6'));
    }
}
