<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventsCategory;
use App\Models\EventsDetail;
use App\Models\HomeAboutUs;
use App\Models\HomeSlider;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminHomeController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $HomeAboutUs = HomeAboutUs::first();
       
        $sliders = HomeSlider::all();
        return view('admin.home', compact('user', 'websiteSetting', 'sliders', 'HomeAboutUs',));
    }
    public function addHomeSliderImage(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $homeSlider = new HomeSlider();
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_home_slider" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/home-slider-image', $filename);

                    // Remove the old image from the folder and database
                    if ($homeSlider->image) {
                        Storage::delete($homeSlider->image);
                    }

                    // Update the new image path
                    $homeSlider->image = $filePath;
                }
                $homeSlider->created_by = $user->id;
                $homeSlider->updated_by = $user->id;
                // Save the user object
                $Save = $homeSlider->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.home', compact('user'));
        }
    }

    public function addHomeAboutUs(Request $request)
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
                if ($request->has('aboutId')) {
                    // Update existing social media entry
                    $homeAboutUs = HomeAboutUs::findOrNew($request->input('aboutId'));
                } else {
                    // Create a new social media entry
                    $homeAboutUs = new HomeAboutUs();
                }


                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($homeAboutUs->image) {
                        Storage::delete($homeAboutUs->image);
                    }

                    // Update the new image path
                    $homeAboutUs->image = $filePath;
                }
                $homeAboutUs->title = $request->input('title');
                $homeAboutUs->content = $request->input('content');
                $homeAboutUs->created_by = $user->id;
                $homeAboutUs->updated_by = $user->id;
                // Save the user object
                $Save = $homeAboutUs->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.gallery', compact('user'));
        }
    }
    
    public function deleteHomeSliderImage($id)
    {
        $slider = HomeSlider::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Slider image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Slider image not found.');
        }
    }
}
