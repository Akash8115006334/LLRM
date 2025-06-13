<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogsDetail;
use App\Models\CoursesDetail;
use App\Models\EventsDetail;
use App\Models\GallerySlider;
use App\Models\HomeSlider;
use App\Models\OurFacultie;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $websiteSetting = Setting::select('websiteLogo')->first();
        $totalHomeBanner = HomeSlider::count();
        $totalCourses = CoursesDetail::count();
        $totalFaculties = OurFacultie::count();
        $totalBlogs = BlogsDetail::count();
        $totalEvents = EventsDetail::count();
        $totalGallerySlider = GallerySlider::count();
        $latestBlogs = BlogsDetail::orderByDesc('id')->take(5)->get();
        $latestEvents = EventsDetail::orderByDesc('id')->take(5)->get();
        return view('admin.index', compact('websiteSetting', 'totalHomeBanner', 'totalCourses', 'totalFaculties', 'totalBlogs', 'totalEvents', 'totalGallerySlider', 'latestBlogs', 'latestEvents'));
    }
}
