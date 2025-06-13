<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FacultieSection;
use App\Models\OurFacultie;
use App\Models\OurManagement;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminFacultiesController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $FacultieSection = FacultieSection::first();
        $OurFacultie = OurFacultie::all();
        return view('admin.faculties', compact('user', 'websiteSetting', 'FacultieSection', 'OurFacultie'));
    }

    public function addFacultiesSection(Request $request)
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
                    $FacultieSection = FacultieSection::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $FacultieSection = new FacultieSection();
                }

                $FacultieSection->title = $request->input('title');
                $FacultieSection->subtitle = $request->input('subtitle');
                $FacultieSection->created_by = $user->id;
                $FacultieSection->updated_by = $user->id;


                // Save the FacultieSection object
                $Save = $FacultieSection->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.faculties');
        }
    }

    public function addFaculties(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "name" => 'required',
                    "designation" => 'required',
                    "address" => 'required',
                    "phone" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $OurFacultie = new OurFacultie();

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($OurFacultie->image) {
                        Storage::delete($OurFacultie->image);
                    }

                    // Update the new image path
                    $OurFacultie->image = $filePath;
                }
                $OurFacultie->name = $request->input('name');
                $OurFacultie->designation = $request->input('designation');
                $OurFacultie->address = $request->input('address');
                $OurFacultie->phone = $request->input('phone');
                $OurFacultie->created_by = $user->id;
                $OurFacultie->updated_by = $user->id;
                // Save the user object
                $Save = $OurFacultie->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.faculties');
        }
    }

    public function editFaculties(Request $request, $id)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "name" => 'required',
                    "designation" => 'required',
                    "address" => 'required',
                    "phone" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $OurFacultie = OurFacultie::find($id);
                if (!$OurFacultie) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($OurFacultie->image) {
                        Storage::delete($OurFacultie->image);
                    }

                    // Update the new image path
                    $OurFacultie->image = $filePath;
                }
                $OurFacultie->name = $request->input('name');
                $OurFacultie->designation = $request->input('designation');
                $OurFacultie->address = $request->input('address');
                $OurFacultie->phone = $request->input('phone');
                $OurFacultie->created_by = $user->id;
                $OurFacultie->updated_by = $user->id;
                // Save the user object
                $Save = $OurFacultie->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            $websiteSetting = Setting::first();
            $OurFacultie = OurFacultie::find($id);
            return view('admin.edit-faculties', compact('websiteSetting',  'OurFacultie'));
        }
    }
    public function deleteFaculties($id)
    {
        $slider = OurFacultie::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Member deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Member not found.');
        }
    }
}
