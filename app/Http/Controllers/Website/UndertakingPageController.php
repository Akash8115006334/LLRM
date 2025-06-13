<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\Undertaking;
use App\Models\UndertakingSection;
use App\Models\FeeStructure;
use App\Models\FeeStructureSection;

class UndertakingPageController extends Controller
{
    public function undertakingPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $Undertaking = Undertaking::all();
        $UndertakingSection = UndertakingSection::first();
        $pageTitle = "Undertaking Page";
        return view('website.undertaking', compact('Setting', 'socialMedia', 'pageTitle',  'Achievement', 'Undertaking', 'UndertakingSection'));
    }
        public function feesStructurePage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $Undertaking = FeeStructure::all();
        $UndertakingSection = FeeStructureSection::first();
        $pageTitle = "Fee Structure";
        return view('website.fees-structure', compact('Setting', 'socialMedia', 'pageTitle',  'Achievement', 'Undertaking', 'UndertakingSection'));
    }
}
