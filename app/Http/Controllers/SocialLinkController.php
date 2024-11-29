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

        return view('index', compact('socialLinks'));
    }
}
