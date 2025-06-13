<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\HomeAboutUs;
use App\Models\HomeSlider;
use App\Models\OurCampu;
use App\Models\Setting;
use App\Models\Achievement;
use App\Models\AddmissionInformation;
use App\Models\AddmissionStep;
use App\Models\AddmissionStepsSection;
use App\Models\BlogsDetail;
use App\Models\CoursesDetail;
use App\Models\EventsCategory;
use App\Models\EventsDetail;
use App\Models\SocialMedia;
use App\Models\StudentReviews;
use App\Models\StudentsReviewsSection;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $sliders = HomeSlider::take(10)->get();
        $HomeAboutUs = HomeAboutUs::first();
        $StudentsReviewsSection = StudentsReviewsSection::first();
        $StudentReviews = StudentReviews::take(10)->get();
        $OurCampu = OurCampu::first();
        $Counters = Counter::all();
        $Achievement = Achievement::first();
        $EventsDetail = EventsDetail::all();
        $EventsCategory = EventsCategory::all();
        $CoursesDetail = CoursesDetail::all();
        $AddmissionStepsSection = AddmissionStepsSection::first();
        $AddmissionStep = AddmissionStep::get()->all();
        $AddmissionInformation = AddmissionInformation::get()->first();
        $BlogsDetail = BlogsDetail::orderBy('id', 'desc')->take(3)->get();

        $pageTitle = "Home Page";
        return view('website.index', compact('Setting', 'socialMedia', 'pageTitle', 'sliders', 'HomeAboutUs', 'StudentReviews', 'StudentsReviewsSection', 'OurCampu', 'Counters', 'Achievement', 'EventsDetail', 'EventsCategory', 'BlogsDetail', 'CoursesDetail', 'AddmissionStepsSection', 'AddmissionStep', 'AddmissionInformation'));
    }
}
