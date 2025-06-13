<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCard;
use App\Models\GallerySections;
use App\Models\GallerySlider;
use App\Models\LaboratoriesCard;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminLaboratoriesControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $socialMedia = SocialMedia::first();
        $websiteSetting = Setting::first();
        $LaboratoriesCard = LaboratoriesCard::all();
        return view('admin.laboratories', compact('user', 'socialMedia', 'websiteSetting', 'LaboratoriesCard'));
    }
    public function addLaboratories(Request $request)
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
                $LaboratoriesCard = new LaboratoriesCard();

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_liberary_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($LaboratoriesCard->image) {
                        Storage::delete($LaboratoriesCard->image);
                    }

                    // Update the new image path
                    $LaboratoriesCard->image = $filePath;
                }
                $LaboratoriesCard->title = $request->input('title');
                $LaboratoriesCard->description = $request->input('description');
                $LaboratoriesCard->created_by = $user->id;
                $LaboratoriesCard->updated_by = $user->id;
                // Save the user object
                $Save = $LaboratoriesCard->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.laboratories');
        }
    }
    public function editLaboratories(Request $request, $id)
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

                $LaboratoriesCard = LaboratoriesCard::find($id);

                if (!$LaboratoriesCard) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }

                // Update image if a new one is provided
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_liberary_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder
                    if ($LaboratoriesCard->image) {
                        Storage::delete($LaboratoriesCard->image);
                    }

                    // Update the image path
                    $LaboratoriesCard->image = $filePath;
                }

                // Update other attributes
                $LaboratoriesCard->title = $request->input('title');
                $LaboratoriesCard->description = $request->input('description');
                $LaboratoriesCard->updated_by = $user->id;

                // Save the updated card
                $saved = $LaboratoriesCard->save();

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
        $LiberaryCardsDetail = LaboratoriesCard::find($id);
        return view('admin.edit-laboratories', compact('user', 'websiteSetting', 'LiberaryCardsDetail'));
    }
    public function deleteLaboratories($id)
    {
        $slider = LaboratoriesCard::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Slider image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Slider image not found.');
        }
    }
}
