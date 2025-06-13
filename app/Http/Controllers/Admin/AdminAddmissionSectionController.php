<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddmissionInformation;
use App\Models\AddmissionStep;
use App\Models\AddmissionStepsSection;
use App\Models\Setting;
use App\Models\SocialMedia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminAddmissionSectionController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $socialMedia = SocialMedia::first();
        $websiteSetting = Setting::first();
        $AddmissionStepsSection = AddmissionStepsSection::first();
        $AddmissionStep = AddmissionStep::get()->all();
        $AddmissionInformation = AddmissionInformation::get()->first();
        return view('admin.addmission-info', compact('user', 'socialMedia', 'websiteSetting', 'AddmissionInformation', 'AddmissionStep', 'AddmissionStepsSection'));
    }
    public function updateAddmissionStepsSection(Request $request)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "subtitle" => 'required',

                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('sectionId')) {
                    // Update existing social media entry
                    $AddmissionStepsSection = AddmissionStepsSection::findOrNew($request->input('sectionId'));
                } else {
                    // Create a new social media entry
                    $AddmissionStepsSection = new AddmissionStepsSection();
                }

                $AddmissionStepsSection->title = $request->input('title');
                $AddmissionStepsSection->subtitle = $request->input('subtitle');
                $AddmissionStepsSection->created_by = $user->id;
                $AddmissionStepsSection->updated_by = $user->id;


                // Save the AddmissionStepsSection object
                $Save = $AddmissionStepsSection->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.addmission-info');
        }
    }
    public function updateAddmissionInfoSection(Request $request)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "subtitle" => 'required',

                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('sectionId')) {
                    // Update existing social media entry
                    $AddmissionInformation = AddmissionInformation::findOrNew($request->input('sectionId'));
                } else {
                    // Create a new social media entry
                    $AddmissionInformation = new AddmissionInformation();
                }
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($AddmissionInformation->image) {
                        Storage::delete($AddmissionInformation->image);
                    }

                    // Update the new image path
                    $AddmissionInformation->image = $filePath;
                }
                $AddmissionInformation->title = $request->input('title');
                $AddmissionInformation->subtitle = $request->input('subtitle');
                $AddmissionInformation->created_by = $user->id;
                $AddmissionInformation->updated_by = $user->id;


                // Save the AddmissionInformation object
                $Save = $AddmissionInformation->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.addmission-info');
        }
    }

    public function addAddmissionSteps(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "image" => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "subtitle" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $AddmissionStep = new AddmissionStep();

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_gallery_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/gallery-image', $filename);

                    // Remove the old image from the folder and database
                    if ($AddmissionStep->image) {
                        Storage::delete($AddmissionStep->image);
                    }

                    // Update the new image path
                    $AddmissionStep->image = $filePath;
                }
                $AddmissionStep->title = $request->input('title');
                $AddmissionStep->subtitle = $request->input('subtitle');
                $AddmissionStep->created_by = $user->id;
                $AddmissionStep->updated_by = $user->id;
                // Save the user object
                $Save = $AddmissionStep->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Addmission Steps Added successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.addmission-info');
        }
    }
    // public function editSliderCard(Request $request, $id)
    // {
    //     $user = auth()->user();
    //     if ($user->user_type === 'Admin') {
    //         if ($request->isMethod("post")) {
    //             $validator = Validator::make($request->all(), [
    //                 "image" => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
    //                 "description" => 'required',
    //             ]);

    //             if ($validator->fails()) {
    //                 return redirect()->back()->withErrors($validator);
    //             }

    //             $galleryCard = GalleryCard::find($id);

    //             if (!$galleryCard) {
    //                 return redirect()->back()->with("error", "Gallery card not found");
    //             }

    //             // Update image if a new one is provided
    //             if ($request->hasFile("image")) {
    //                 $file = $request->file("image");
    //                 $filename = time() . "_gallery_card" . '.' . $file->getClientOriginalExtension();
    //                 $filePath = $file->storeAs('public/gallery-image', $filename);

    //                 // Remove the old image from the folder
    //                 if ($galleryCard->image) {
    //                     Storage::delete($galleryCard->image);
    //                 }

    //                 // Update the image path
    //                 $galleryCard->image = $filePath;
    //             }

    //             // Update other attributes
    //             $galleryCard->description = $request->input('description');
    //             $galleryCard->updated_by = $user->id;

    //             // Save the updated card
    //             $saved = $galleryCard->save();

    //             if ($saved) {
    //                 return redirect()->back()->with("success", "Details updated successfully");
    //             } else {
    //                 return redirect()->back()->with("error", "Something went wrong");
    //             }
    //         }
    //     } else {

    //         return redirect()->back()->with("error", "Unauthorized action");
    //     }

    //     $websiteSetting = Setting::first();
    //     $cards = GalleryCard::find($id);
    //     return view('admin.edit-gallery', compact('user', 'websiteSetting', 'cards'));
    // }

    public function deleteAddAddmissionSteps($id)
    {
        $slider = AddmissionStep::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Addmission Step deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Addmission Step not found.');
        }
    }
}
