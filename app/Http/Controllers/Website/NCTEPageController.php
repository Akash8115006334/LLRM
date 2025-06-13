<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\NcteRevised;
use App\Models\Setting;
use App\Models\SocialMedia;

class NCTEPageController extends Controller
{
    public function ncteRevisedPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $NcteRevised = NcteRevised::all();
        $pageTitle = "NCTE Order Page";
        return view('website.ncte-revised', compact('Setting', 'socialMedia', 'pageTitle',  'Achievement', 'NcteRevised'));
    }
}
