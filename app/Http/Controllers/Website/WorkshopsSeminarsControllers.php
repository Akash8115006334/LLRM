<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\Achievement;
use App\Models\Workshop;

class WorkshopsSeminarsControllers extends Controller
{
    public function workshopsSeminarsPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $Workshop = Workshop::first();
        $pageTitle = "Liberary Details Page";
        return view('website.workshops-seminars', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'Workshop' ));
    }
}
