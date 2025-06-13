<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\LandCompletion;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SocialMedia;

class LandCompletionControllers extends Controller
{
    public function landCompletionPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $LandCompletion = LandCompletion::first();
        $pageTitle = "Land Complition Page";
        return view('website.land-completion-certificate', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'LandCompletion'));
    }
}
