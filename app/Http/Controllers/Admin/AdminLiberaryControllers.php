<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCard;
use App\Models\GallerySections;
use App\Models\GallerySlider;
use App\Models\LiberaryCard;
use App\Models\LiberarySectionDetail;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminLiberaryControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $socialMedia = SocialMedia::first();
        $websiteSetting = Setting::first();
        $LiberarySectionDetail = LiberarySectionDetail::first();
        $LiberaryCardsDetail = LiberaryCard::get()->all();
        return view('admin.liberary', compact('user', 'socialMedia', 'websiteSetting', 'LiberarySectionDetail', 'LiberaryCardsDetail'));
    }
    public function updateLiberaryDetials(Request $request)
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
                    $LiberarySectionDetail = LiberarySectionDetail::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $LiberarySectionDetail = new LiberarySectionDetail();
                }

                $LiberarySectionDetail->title = $request->input('title');
                $LiberarySectionDetail->subtitle = $request->input('subtitle');
                $LiberarySectionDetail->additionalContent = $request->input('additionalContent');
                $LiberarySectionDetail->created_by = $user->id;
                $LiberarySectionDetail->updated_by = $user->id;


                // Save the LiberarySectionDetail object
                $Save = $LiberarySectionDetail->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.liberary');
        }
    }
    public function addLiberaryDetials(Request $request)
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
                $LiberaryCard = new LiberaryCard();

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_liberary_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($LiberaryCard->image) {
                        Storage::delete($LiberaryCard->image);
                    }

                    // Update the new image path
                    $LiberaryCard->image = $filePath;
                }
                $LiberaryCard->title = $request->input('title');
                $LiberaryCard->description = $request->input('description');
                $LiberaryCard->created_by = $user->id;
                $LiberaryCard->updated_by = $user->id;
                // Save the user object
                $Save = $LiberaryCard->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.liberary');
        }
    }
    public function editLiberaryDetials(Request $request, $id)
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

                $LiberaryCard = LiberaryCard::find($id);

                if (!$LiberaryCard) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }

                // Update image if a new one is provided
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_liberary_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder
                    if ($LiberaryCard->image) {
                        Storage::delete($LiberaryCard->image);
                    }

                    // Update the image path
                    $LiberaryCard->image = $filePath;
                }

                // Update other attributes
                $LiberaryCard->title = $request->input('title');
                $LiberaryCard->description = $request->input('description');
                $LiberaryCard->updated_by = $user->id;

                // Save the updated card
                $saved = $LiberaryCard->save();

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
        $LiberaryCardsDetail = LiberaryCard::find($id);
        return view('admin.edit-liberary', compact('user', 'websiteSetting', 'LiberaryCardsDetail'));
    }
    public function deleteLiberaryDetials($id)
    {
        $slider = LiberaryCard::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Slider image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Slider image not found.');
        }
    }
}
