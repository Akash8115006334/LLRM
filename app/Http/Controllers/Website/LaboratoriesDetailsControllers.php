<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\Achievement;
use App\Models\LaboratoriesCard;

class LaboratoriesDetailsControllers extends Controller
{
    public function laboratoriesPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $LaboratoriesCard = LaboratoriesCard::all();
        $pageTitle = "Laboratories Details Page";
        return view('website.laboratories', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'LaboratoriesCard'));
    }
}
