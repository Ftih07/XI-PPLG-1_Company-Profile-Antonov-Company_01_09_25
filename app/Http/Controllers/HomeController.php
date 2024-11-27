<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;
use App\Models\News;
use App\Models\ChiefDesigner;

class HomeController extends Controller
{
    public function index()
    {
        $industries = Industry::all(); 
        $news = News::all(); 
        $chiefDesigners = ChiefDesigner::all();

        return view('index', compact('industries', 'news', 'chiefDesigners'));
    }
}