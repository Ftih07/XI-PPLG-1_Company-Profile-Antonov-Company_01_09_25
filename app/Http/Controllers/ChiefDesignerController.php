<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChiefDesigner;

class ChiefDesignerController extends Controller
{
    //
    public function index()
    {
        $chiefDesigners = ChiefDesigner::all();

        return view('index', compact('chiefDesigners'));
    }
}
