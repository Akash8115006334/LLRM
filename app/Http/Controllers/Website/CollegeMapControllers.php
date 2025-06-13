<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\CollegeMap;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SocialMedia;

class CollegeMapControllers extends Controller
{
    public function collegeMapPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $CollegeMap = CollegeMap::first();
        $pageTitle = "College Map Page";
        return view('website.college-map', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'CollegeMap'));
    }
}
