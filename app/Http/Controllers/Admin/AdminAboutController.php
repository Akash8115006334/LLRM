<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutUs;
use App\Models\HomeSlider;
use App\Models\OurCampu;
use App\Models\OurMission;
use App\Models\OurVission;
use App\Models\Setting;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminAboutController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $OurMission = OurMission::first();
        $OurVission = OurVission::first();
        $WhyChooseUs = WhyChooseUs::first();
        $OurCampu = OurCampu::first();
        return view('admin.about', compact('user', 'websiteSetting', 'WhyChooseUs', 'OurMission', 'OurVission', 'OurCampu'));
    }
    public function addWhyChooseUs(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "content" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                if ($request->has('Id')) {
                    // Update existing social media entry
                    $WhyChooseUs = WhyChooseUs::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $WhyChooseUs = new WhyChooseUs();
                }


                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($WhyChooseUs->image) {
                        Storage::delete($WhyChooseUs->image);
                    }

                    // Update the new image path
                    $WhyChooseUs->image = $filePath;
                }
                $WhyChooseUs->title = $request->input('title');
                $WhyChooseUs->content = $request->input('content');
                $WhyChooseUs->created_by = $user->id;
                $WhyChooseUs->updated_by = $user->id;
                // Save the user object
                $Save = $WhyChooseUs->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.about');
        }
    }
    public function addOurMission(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "content" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                if ($request->has('Id')) {
                    // Update existing social media entry
                    $OurMission = OurMission::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $OurMission = new OurMission();
                }


                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($OurMission->image) {
                        Storage::delete($OurMission->image);
                    }

                    // Update the new image path
                    $OurMission->image = $filePath;
                }
                $OurMission->title = $request->input('title');
                $OurMission->content = $request->input('content');
                $OurMission->created_by = $user->id;
                $OurMission->updated_by = $user->id;
                // Save the user object
                $Save = $OurMission->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.about');
        }
    }
    public function addOurVission(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "content" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                if ($request->has('Id')) {
                    // Update existing social media entry
                    $OurVission = OurVission::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $OurVission = new OurVission();
                }


                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($OurVission->image) {
                        Storage::delete($OurVission->image);
                    }

                    // Update the new image path
                    $OurVission->image = $filePath;
                }
                $OurVission->title = $request->input('title');
                $OurVission->content = $request->input('content');
                $OurVission->created_by = $user->id;
                $OurVission->updated_by = $user->id;
                // Save the user object
                $Save = $OurVission->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.about');
        }
    }
    public function addOurCampus(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'link' => 'nullable|url',
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "content" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                if ($request->has('Id')) {
                    // Update existing social media entry
                    $OurCampu = OurCampu::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $OurCampu = new OurCampu();
                }


                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($OurCampu->image) {
                        Storage::delete($OurCampu->image);
                    }

                    // Update the new image path
                    $OurCampu->image = $filePath;
                }
                $OurCampu->title = $request->input('title');
                $OurCampu->link = $request->input('link');
                $OurCampu->content = $request->input('content');
                $OurCampu->created_by = $user->id;
                $OurCampu->updated_by = $user->id;
                // Save the user object
                $Save = $OurCampu->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.about');
        }
    }
}
