<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminSettingController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $socialMedia = SocialMedia::first();
        $websiteSetting = Setting::first();
        return view('admin.setting', compact('user', 'socialMedia', 'websiteSetting'));
    }

    public function updateMedia(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "facebook" => 'nullable|url',
                    "instagram" => 'nullable|url',
                    "twitter" => 'nullable|url',
                    "linkedin" => 'nullable|url',
                    "youtube" => 'nullable|url',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                if ($request->has('socialMediaId')) {
                    // Update existing social media entry
                    $socialMedia = SocialMedia::findOrNew($request->input('socialMediaId'));
                } else {
                    // Create a new social media entry
                    $socialMedia = new SocialMedia();
                }
                $socialMedia->facebook = $request->input('facebook');
                $socialMedia->instagram = $request->input('instagram');
                $socialMedia->twitter = $request->input('twitter');
                $socialMedia->linkedin = $request->input('linkedin');
                $socialMedia->youtube = $request->input('youtube');
                $socialMedia->created_by = $user->id;
                $socialMedia->updated_by = $user->id;
                // Save the user object
                $Save = $socialMedia->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.setting', compact('user'));
        }
    }

    public function websiteSetting(Request $request)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "websiteName" => 'required',
                    "websiteTagline" => 'required',
                    "websiteLink" => 'required|url',
                    "websiteLogo" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "websitePrimaryPhoneNo" => 'required|numeric|min:10',
                    "websiteAlternatePhoneNo" => 'nullable|numeric|min:10',
                    "websiteAdditionalPhoneNo" => 'nullable|numeric|min:10',
                    "websitePrimaryEmailId" => 'required|email',
                    "websiteAlternateEmailId" => 'nullable|email',
                    "websiteAdditionalEmailId" => 'nullable|email',
                    "websiteAddress" => 'required',
                    "websiteMapUrl" => 'nullable|url',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('websiteSettingId')) {
                    // Update existing social media entry
                    $Setting = Setting::findOrNew($request->input('websiteSettingId'));
                } else {
                    // Create a new social media entry
                    $Setting = new Setting();
                }

                $Setting->websiteName = $request->input('websiteName');
                $Setting->websiteTagline = $request->input('websiteTagline');
                $Setting->websiteLink = $request->input('websiteLink');
                $Setting->websitePrimaryPhoneNo = $request->input('websitePrimaryPhoneNo');
                $Setting->websiteAlternatePhoneNo = $request->input('websiteAlternatePhoneNo');
                $Setting->websiteAdditionalPhoneNo = $request->input('websiteAdditionalPhoneNo');
                $Setting->websitePrimaryEmailId = $request->input('websitePrimaryEmailId');
                $Setting->websiteAlternateEmailId = $request->input('websiteAlternateEmailId');
                $Setting->websiteAdditionalEmailId = $request->input('websiteAdditionalEmailId');
                $Setting->websiteAddress = $request->input('websiteAddress');
                $Setting->websiteMapUrl = $request->input('websiteMapUrl');
                $Setting->created_by = $user->id;
                $Setting->updated_by = $user->id;

                if ($request->hasFile("websiteLogo")) {
                    $file = $request->file("websiteLogo");
                    $filename = time() . "_website_logo" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/website-logo', $filename);

                    // Remove the old websiteLogo from the folder and database
                    if ($user->websiteLogo) {
                        Storage::delete($user->websiteLogo);
                    }

                    // Update the new websiteLogo path
                    $Setting->websiteLogo = $filePath;
                }

                // Save the Setting object
                $Save = $Setting->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.setting', compact('user'));
        }
    }
}
