<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Policie;
use App\Models\Setting;
use App\Models\Achievement;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class PolicyPageController extends Controller
{
    public function policyPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Policy = Policie::first();
        $Achievement = Achievement::first();
        $pageTitle = "Privacy Policy Page";
        return view('website.privacy-policy', compact('Setting', 'socialMedia', 'pageTitle', 'Policy', 'Achievement'));
    }
}
