<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FacilitiesCard;
use App\Models\FacilitiesSectionDetail;
use App\Models\GalleryCard;
use App\Models\GallerySections;
use App\Models\GallerySlider;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminOtherFacilitiesControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $socialMedia = SocialMedia::first();
        $websiteSetting = Setting::first();
        $FacilitiesSectionDetail = FacilitiesSectionDetail::first();
        $FacilitiesCard = FacilitiesCard::get()->all();
        return view('admin.other-facilities', compact('user', 'socialMedia', 'websiteSetting', 'FacilitiesSectionDetail', 'FacilitiesCard'));
    }
    public function updateOtherFacilities(Request $request)
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
                    $FacilitiesSectionDetail = FacilitiesSectionDetail::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $FacilitiesSectionDetail = new FacilitiesSectionDetail();
                }

                $FacilitiesSectionDetail->title = $request->input('title');
                $FacilitiesSectionDetail->subtitle = $request->input('subtitle');
                $FacilitiesSectionDetail->additionalContent = $request->input('additionalContent');
                $FacilitiesSectionDetail->created_by = $user->id;
                $FacilitiesSectionDetail->updated_by = $user->id;


                // Save the FacilitiesSectionDetail object
                $Save = $FacilitiesSectionDetail->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.other-facilities');
        }
    }
    public function addOtherFacilities(Request $request)
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
                $FacilitiesCard = new FacilitiesCard();

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_liberary_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($FacilitiesCard->image) {
                        Storage::delete($FacilitiesCard->image);
                    }

                    // Update the new image path
                    $FacilitiesCard->image = $filePath;
                }
                $FacilitiesCard->title = $request->input('title');
                $FacilitiesCard->description = $request->input('description');
                $FacilitiesCard->created_by = $user->id;
                $FacilitiesCard->updated_by = $user->id;
                // Save the user object
                $Save = $FacilitiesCard->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.other-facilities');
        }
    }
    public function editOtherFacilities(Request $request, $id)
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

                $FacilitiesCard = FacilitiesCard::find($id);

                if (!$FacilitiesCard) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }

                // Update image if a new one is provided
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_liberary_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder
                    if ($FacilitiesCard->image) {
                        Storage::delete($FacilitiesCard->image);
                    }

                    // Update the image path
                    $FacilitiesCard->image = $filePath;
                }

                // Update other attributes
                $FacilitiesCard->title = $request->input('title');
                $FacilitiesCard->description = $request->input('description');
                $FacilitiesCard->updated_by = $user->id;

                // Save the updated card
                $saved = $FacilitiesCard->save();

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
        $FacilitiesCard = FacilitiesCard::find($id);
        return view('admin.edit-other-facilities', compact('user', 'websiteSetting', 'FacilitiesCard'));
    }
    public function deleteOtherFacilities($id)
    {
        $slider = FacilitiesCard::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Slider image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Slider image not found.');
        }
    }
}
