<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Undertaking;
use App\Models\UndertakingSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminUndertakingController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $UndertakingSection = UndertakingSection::first();
        $Undertaking = Undertaking::all();
        return view('admin.undertaking', compact('user', 'websiteSetting', 'UndertakingSection', 'Undertaking'));
    }

    public function updateUndertakingSection(Request $request)
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

                if ($request->has('Id')) {
                    // Update existing social media entry
                    $UndertakingSection = UndertakingSection::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $UndertakingSection = new UndertakingSection();
                }


                $UndertakingSection->title = $request->input('title');
                $UndertakingSection->subtitle = $request->input('subtitle');
                $UndertakingSection->created_by = $user->id;
                $UndertakingSection->updated_by = $user->id;


                // Save the UndertakingSection object
                $Save = $UndertakingSection->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.undertaking');
        }
    }

    public function addUndertaking(Request $request)
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
                $Undertaking = new Undertaking();
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_Undertaking_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($Undertaking->image) {
                        Storage::delete($Undertaking->image);
                    }

                    // Update the new image path
                    $Undertaking->image = $filePath;
                }
                $Undertaking->created_by = $user->id;
                $Undertaking->updated_by = $user->id;
                // Save the user object
                $Save = $Undertaking->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.undertaking');
        }
    }

    public function editUndertaking(Request $request, $id)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator);
                }

                $Undertaking = Undertaking::find($id);

                if (!$Undertaking) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_Undertaking_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($Undertaking->image) {
                        Storage::delete($Undertaking->image);
                    }

                    // Update the new image path
                    $Undertaking->image = $filePath;
                }

                // Update other attributes
                $Undertaking->updated_by = $user->id;

                // Save the updated card
                $saved = $Undertaking->save();

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
        $Undertaking = Undertaking::find($id);
        return view('admin.edit-undertaking', compact('user', 'websiteSetting', 'Undertaking'));
    }

    public function deleteUndertaking($id)
    {
        $slider = Undertaking::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Undertaking Image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Undertaking Image not found.');
        }
    }
}
