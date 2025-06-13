<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCard;
use App\Models\GallerySections;
use App\Models\GallerySlider;
use App\Models\Setting;
use App\Models\SocialMedia;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminWorkshopControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $socialMedia = SocialMedia::first();
        $websiteSetting = Setting::first();
        $Workshop = Workshop::first();

        return view('admin.workshop', compact('user', 'socialMedia', 'websiteSetting', 'Workshop'));
    }
    public function editWorkshops(Request $request)
    {

        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "content" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('Id')) {
                    // Update existing social media entry
                    $Workshop = Workshop::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $Workshop = new Workshop();
                }


                $Workshop->title = $request->input('title');
                $Workshop->content = $request->input('content');
                $Workshop->created_by = $user->id;
                $Workshop->updated_by = $user->id;


                // Save the Workshop object
                $Save = $Workshop->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.workshop');
        }
    }
}
