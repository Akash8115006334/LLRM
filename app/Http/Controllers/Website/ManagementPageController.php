<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\ManagmentSection;
use App\Models\OurManagement;
use App\Models\Setting;
use App\Models\Achievement;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ManagementPageController extends Controller
{
    public function managementPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $OurManagement = OurManagement::all();
        $ManagmentSection = ManagmentSection::first();
        $Achievement = Achievement::first();
        $pageTitle = "Management Page";
        return view('website.management', compact('Setting', 'socialMedia', 'pageTitle', 'OurManagement', 'ManagmentSection', 'Achievement'));
    }
}
