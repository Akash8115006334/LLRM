<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\BlogsCategory;
use App\Models\BlogsDetail;
use App\Models\BlogsTag;
use App\Models\CoursesDetail;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class CoursesControllers extends Controller
{
    public function courses()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $CoursesDetail = CoursesDetail::all();
        $pageTitle = "Courses Page";
        return view('website.courses', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'CoursesDetail'));
    }
    public function coursesDetails(Request $request, $id)
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $CoursesDetail = CoursesDetail::find($id);
        $pageTitle = "Courses Details Page";
        return view('website.courses-details', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'CoursesDetail',));
    }
}
