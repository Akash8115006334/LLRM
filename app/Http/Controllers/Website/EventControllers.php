<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\EventsCategory;
use App\Models\EventsDetail;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class EventControllers extends Controller
{
    public function event()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $EventsDetail = EventsDetail::all();
        $EventsCategory = EventsCategory::all();
        $pageTitle = "Events Page";
        return view('website.events', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'EventsDetail', 'EventsCategory'));
    }
    public function eventDetails(Request $request, $id)
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $EventsDetail = EventsDetail::find($id);
        $EventsCategory = EventsCategory::all();
        $pageTitle = "Events Details Page";
        return view('website.event-details', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'EventsDetail', 'EventsCategory'));
    }
}
