<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\Achievement;
use App\Models\AddedFacilitiesCard;
use App\Models\AddedFacilitiesSectionDetail;

class AddedFacilitiesControllers extends Controller
{
    public function addedFacilitiesPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $AddedFacilitiesSectionDetail = AddedFacilitiesSectionDetail::first();
        $AddedFacilitiesCard = AddedFacilitiesCard::all();
        $pageTitle = "Added Facilities Details Page";
        return view('website.added-facilities', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'AddedFacilitiesSectionDetail' , 'AddedFacilitiesCard'));
    }
}
