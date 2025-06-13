<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\FacultieSection;
use App\Models\OurFacultie;
use App\Models\Setting;
use App\Models\Achievement;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class FacultiePageController extends Controller
{
    public function facultiePage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $FacultieSection = FacultieSection::first();
        $OurFacultie = OurFacultie::all();
        $Achievement = Achievement::first();
        $pageTitle = "Faculties Page";
        return view('website.our-faculty', compact('Setting', 'socialMedia', 'pageTitle', 'OurFacultie', 'FacultieSection', 'Achievement'));
    }
}
