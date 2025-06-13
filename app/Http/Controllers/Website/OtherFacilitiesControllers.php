<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\Achievement;
use App\Models\FacilitiesCard;
use App\Models\FacilitiesSectionDetail;

class OtherFacilitiesControllers extends Controller
{
    public function otherFacilitiesPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $FacilitiesSectionDetail = FacilitiesSectionDetail::first();
        $FacilitiesCard = FacilitiesCard::all();
        $pageTitle = "Other Facilities Details Page";
        return view('website.other-facilities', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'FacilitiesSectionDetail','FacilitiesCard'));
    }
}
