<?php

namespace App\Http\Controllers;

use App\Models\Airplane;
use Illuminate\Http\Request;

class AirplaneController extends Controller
{
    //
    public function index()
    {
        $airplanes = Airplane::all();
        return view('airplanes.index', compact('airplanes'));
    }
}
