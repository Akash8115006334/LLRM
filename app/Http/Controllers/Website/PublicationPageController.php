<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\Publication;
use App\Models\PublicationSection;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class PublicationPageController extends Controller
{
    public function publicationPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $Publication = Publication::all();
        $PublicationSection = PublicationSection::first();
        $pageTitle = "Publication Page";
        return view('website.publication', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'PublicationSection', 'Publication'));
    }
}
