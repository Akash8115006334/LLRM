<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function contactPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $pageTitle = "Contact Page";
        return view('website.contact', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement'));
    }
}
