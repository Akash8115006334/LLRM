<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\PublicationSection;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminPublicationControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $PublicationSection = PublicationSection::first();
        $Publication = Publication::all();
        return view('admin.publication', compact('user', 'websiteSetting', 'PublicationSection', 'Publication'));
    }

    public function updatePublicatonSection(Request $request)
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
                    $Publication = PublicationSection::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $Publication = new PublicationSection();
                }


                $Publication->title = $request->input('title');
                $Publication->subtitle = $request->input('subtitle');
                $Publication->created_by = $user->id;
                $Publication->updated_by = $user->id;


                // Save the Publication object
                $Save = $Publication->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.publication');
        }
    }

    public function addPublication(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "content" => 'required',
                    "image" => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $Publication = new Publication();
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_publication_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($Publication->image) {
                        Storage::delete($Publication->image);
                    }

                    // Update the new image path
                    $Publication->image = $filePath;
                }
                $Publication->title = $request->input('title');
                $Publication->content = $request->input('content');
                $Publication->created_by = $user->id;
                $Publication->updated_by = $user->id;
                // Save the user object
                $Save = $Publication->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.publication');
        }
    }

    public function editPublication(Request $request, $id)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "content" => 'required',
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator);
                }

                $Publication = Publication::find($id);

                if (!$Publication) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_publication_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($Publication->image) {
                        Storage::delete($Publication->image);
                    }

                    // Update the new image path
                    $Publication->image = $filePath;
                }

                // Update other attributes
                $Publication->title = $request->input('title');
                $Publication->content = $request->input('content');
                $Publication->updated_by = $user->id;

                // Save the updated card
                $saved = $Publication->save();

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
        $Publication = Publication::find($id);
        return view('admin.edit-publication', compact('user', 'websiteSetting', 'Publication'));
    }

    public function deletePublication($id)
    {
        $slider = Publication::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Book  deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Book  not found.');
        }
    }
}
