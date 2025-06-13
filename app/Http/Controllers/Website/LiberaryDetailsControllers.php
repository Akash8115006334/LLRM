<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\LiberaryCard;
use App\Models\LiberarySectionDetail;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class LiberaryDetailsControllers extends Controller
{
    public function liberaryDetailsPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $LiberarySectionDetail = LiberarySectionDetail::first();
        $LiberaryCard = LiberaryCard::all();
        $pageTitle = "Liberary Details Page";
        return view('website.liberary-details', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'LiberarySectionDetail' , 'LiberaryCard'));
    }
}
