<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\GalleryCard;
use App\Models\GallerySections;
use App\Models\GallerySlider;
use App\Models\Setting;
use App\Models\Achievement;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class GalleryPageController extends Controller
{
    public function galleryPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $sliders = GallerySlider::all();
        $cards = GalleryCard::all();
        $section = GallerySections::first();
        $Achievement = Achievement::first();
        $pageTitle = "Gallery Page";
        return view('website.gallery', compact('Setting', 'socialMedia', 'pageTitle', 'sliders', 'cards', 'section', 'Achievement'));
    }
}
