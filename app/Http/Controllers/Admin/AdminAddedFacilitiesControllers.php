<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddedFacilitiesCard;
use App\Models\AddedFacilitiesSectionDetail;
use App\Models\GalleryCard;
use App\Models\GallerySections;
use App\Models\GallerySlider;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminAddedFacilitiesControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $socialMedia = SocialMedia::first();
        $websiteSetting = Setting::first();
        $AddedFacilitiesSectionDetail = AddedFacilitiesSectionDetail::first();
        $AddedFacilitiesCard = AddedFacilitiesCard::get()->all();

        return view('admin.added-facilities', compact('user', 'socialMedia', 'websiteSetting', 'AddedFacilitiesCard', 'AddedFacilitiesSectionDetail'));
    }

    public function updateaddedFacilities(Request $request)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "subtitle" => 'required',
                    "additionalContent" => 'required',

                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('Id')) {
                    // Update existing social media entry
                    $AddedFacilitiesSectionDetail = AddedFacilitiesSectionDetail::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $AddedFacilitiesSectionDetail = new AddedFacilitiesSectionDetail();
                }

                $AddedFacilitiesSectionDetail->title = $request->input('title');
                $AddedFacilitiesSectionDetail->subtitle = $request->input('subtitle');
                $AddedFacilitiesSectionDetail->additionalContent = $request->input('additionalContent');
                $AddedFacilitiesSectionDetail->created_by = $user->id;
                $AddedFacilitiesSectionDetail->updated_by = $user->id;


                // Save the AddedFacilitiesSectionDetail object
                $Save = $AddedFacilitiesSectionDetail->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.added-facilities');
        }
    }
    public function addaddedFacilities(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "image" => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $AddedFacilitiesCard = new AddedFacilitiesCard();

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_liberary_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($AddedFacilitiesCard->image) {
                        Storage::delete($AddedFacilitiesCard->image);
                    }

                    // Update the new image path
                    $AddedFacilitiesCard->image = $filePath;
                }
                $AddedFacilitiesCard->title = $request->input('title');
                $AddedFacilitiesCard->description = $request->input('description');
                $AddedFacilitiesCard->created_by = $user->id;
                $AddedFacilitiesCard->updated_by = $user->id;
                // Save the user object
                $Save = $AddedFacilitiesCard->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.added-facilities');
        }
    }
    public function editaddedFacilities(Request $request, $id)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "image" => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator);
                }

                $AddedFacilitiesCard = AddedFacilitiesCard::find($id);

                if (!$AddedFacilitiesCard) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }

                // Update image if a new one is provided
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_liberary_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder
                    if ($AddedFacilitiesCard->image) {
                        Storage::delete($AddedFacilitiesCard->image);
                    }

                    // Update the image path
                    $AddedFacilitiesCard->image = $filePath;
                }

                // Update other attributes
                $AddedFacilitiesCard->title = $request->input('title');
                $AddedFacilitiesCard->description = $request->input('description');
                $AddedFacilitiesCard->updated_by = $user->id;

                // Save the updated card
                $saved = $AddedFacilitiesCard->save();

                if ($saved) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Something went wrong");
                }
            }
        } else {

            return redirect()->back()->with("error", "Unauthorized action");
        }

        $websiteSetting = Setting::first();
        $AddedFacilitiesCard = AddedFacilitiesCard::find($id);
        return view('admin.edit-added-facilities', compact('user', 'websiteSetting', 'AddedFacilitiesCard'));
    }
    public function deleteaddedFacilities($id)
    {
        $slider = AddedFacilitiesCard::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Slider image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Slider image not found.');
        }
    }
}
