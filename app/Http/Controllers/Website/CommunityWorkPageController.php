<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\Communitie;
use App\Models\Setting;
use App\Models\SocialMedia;

class CommunityWorkPageController extends Controller
{
    public function communityWorkPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $Communitie = Communitie::first();
        $pageTitle = "Community Work Page";
        return view('website.community-work', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'Communitie'));
    }
}
