<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    //
    public function index()
    {
        $histories = History::all();
        return view('index', compact('histories'));
    }
}
