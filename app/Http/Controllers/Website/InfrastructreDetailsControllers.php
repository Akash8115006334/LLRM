<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\InfrastructureDetails;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class InfrastructreDetailsControllers extends Controller
{
    public function infrastructureDetailsPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $InfrastructureDetails = InfrastructureDetails::first();
        $pageTitle = "Infrastructre Details Page";
        return view('website.infrastructure-details', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'InfrastructureDetails'));
    }
}
