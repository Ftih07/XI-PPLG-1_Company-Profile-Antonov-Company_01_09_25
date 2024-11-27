<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChiefDesigner;

class ChiefDesignerController extends Controller
{
    //
    public function index()
    {
        // Ambil semua data Chief Designers dari database
        $chiefDesigners = ChiefDesigner::all();

        // Kirim data ke view
        return view('index', compact('chiefDesigners'));
    }
}
