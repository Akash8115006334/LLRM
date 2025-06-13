<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\CollegeMap;
use App\Models\Counter;
use App\Models\FacultieSection;
use App\Models\HomeAboutUs;
use App\Models\InfrastructureDetails;
use App\Models\LandCompletion;
use App\Models\OurCampu;
use App\Models\OurFacultie;
use App\Models\OurMission;
use App\Models\OurVission;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\StudentReviews;
use App\Models\StudentsReviewsSection;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function aboutPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $StudentReviews = StudentReviews::take(10)->get();
        $StudentsReviewsSection = StudentsReviewsSection::first();
        $HomeAboutUs = HomeAboutUs::first();
        $OurMission = OurMission::first();
        $OurVission = OurVission::first();
        $WhyChooseUs = WhyChooseUs::first();
        $OurCampu = OurCampu::first();
        $Achievement = Achievement::first();
        $FacultieSection = FacultieSection::first();
        $OurFacultie = OurFacultie::take(3)->get();
        $Counters = Counter::all();
        $pageTitle = "About Page";
        return view('website.about', compact('Setting', 'socialMedia', 'pageTitle', 'StudentReviews', 'StudentsReviewsSection', 'HomeAboutUs', 'OurMission', 'OurVission', 'WhyChooseUs', 'OurCampu', 'FacultieSection', 'OurFacultie', 'Counters', 'Achievement',));
    }
}
