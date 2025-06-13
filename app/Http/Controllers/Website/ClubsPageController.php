<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Club;
use App\Models\Setting;
use App\Models\SocialMedia;

class ClubsPageController extends Controller
{
    public function clubsPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $Club = Club::first();
        $pageTitle = "Clubs Page";
        return view('website.clubs', compact('Setting', 'socialMedia', 'pageTitle',  'Achievement', 'Club'));
    }
}
