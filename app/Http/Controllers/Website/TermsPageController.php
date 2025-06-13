<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutUs;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\Achievement;
use App\Models\Term;
use Illuminate\Http\Request;

class TermsPageController extends Controller
{
    public function termsPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Terms = Term::first();
        $Achievement = Achievement::first();
        $pageTitle = "Terms Conditions";
        return view('website.terms-conditions', compact('Setting', 'socialMedia', 'pageTitle', 'Terms', 'Achievement'));
    }
}
