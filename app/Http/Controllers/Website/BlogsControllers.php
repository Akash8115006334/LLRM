<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\BlogsCategory;
use App\Models\BlogsDetail;
use App\Models\BlogsTag;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class BlogsControllers extends Controller
{
    public function blogs()
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $BlogsDetail = BlogsDetail::all();
        $BlogsCategory = BlogsCategory::all();
        $BlogsTag = BlogsTag::all();
        $pageTitle = "Blogs Page";
        return view('website.blog', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'BlogsDetail', 'BlogsCategory', 'BlogsTag'));
    }
    public function blogsDetails(Request $request, $id)
    {
        $socialMedia = SocialMedia::first();
        $Setting = Setting::first();
        $Achievement = Achievement::first();
        $BlogsDetail = BlogsDetail::find($id);
        $BlogsDetails = BlogsDetail::all();
        $BlogsCategory = BlogsCategory::all();
        $BlogsTag = BlogsTag::all();
        $pageTitle = "Blog Details Page";
        return view('website.blog-details', compact('Setting', 'socialMedia', 'pageTitle', 'Achievement', 'BlogsDetail', 'BlogsCategory', 'BlogsTag', 'BlogsDetails'));
    }
}
