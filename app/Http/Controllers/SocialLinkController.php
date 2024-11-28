<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialLink;

class SocialLinkController extends Controller
{
    //
    public function showSocialLinks()
    {
        $socialLinks = SocialLink::all();

        // Mengirim data ke view 'your-view'
        return view('index', compact('socialLinks'));
    }
}
