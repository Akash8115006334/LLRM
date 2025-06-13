<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;
use App\Models\MajorCell;
use App\Models\Setting;
use App\Models\SocialMedia;

class MajorCellsPageController extends Controller
{
    public function majorCellsPage()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $MajorCell = MajorCell::first();
        $pageTitle = "Major Cells Page";
        return view('website.major-cells', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'MajorCell'));
    }
}
