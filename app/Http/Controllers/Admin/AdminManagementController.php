<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FacultieSection;
use App\Models\ManagmentSection;
use App\Models\OurFacultie;
use App\Models\OurManagement;
use App\Models\Setting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminManagementController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $OurManagement = OurManagement::all();
        $ManagmentSection = ManagmentSection::first();

        return view('admin.managment-members', compact('user', 'websiteSetting', 'OurManagement', 'ManagmentSection'));
    }

    public function addManagementSection(Request $request)
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
                    $ManagmentSection = ManagmentSection::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $ManagmentSection = new ManagmentSection();
                }

                $ManagmentSection->title = $request->input('title');
                $ManagmentSection->subtitle = $request->input('subtitle');
                $ManagmentSection->created_by = $user->id;
                $ManagmentSection->updated_by = $user->id;


                // Save the ManagmentSection object
                $Save = $ManagmentSection->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.managment-members');
        }
    }

    public function addManagementMember(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "name" => 'required',
                    "designation" => 'required',
                    "address" => 'required',
                    "phone" => 'required|min:10',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $OurManagement = new OurManagement();

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($OurManagement->image) {
                        Storage::delete($OurManagement->image);
                    }

                    // Update the new image path
                    $OurManagement->image = $filePath;
                }
                $OurManagement->name = $request->input('name');
                $OurManagement->designation = $request->input('designation');
                $OurManagement->address = $request->input('address');
                $OurManagement->phone = $request->input('phone');
                $OurManagement->created_by = $user->id;
                $OurManagement->updated_by = $user->id;
                // Save the user object
                $Save = $OurManagement->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.managment-members');
        }
    }
    public function editManagmentMember(Request $request, $id)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "name" => 'required',
                    "designation" => 'required',
                    "address" => 'required',
                    "phone" => 'required|min:10',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $OurManagement = OurManagement::find($id);
                if (!$OurManagement) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($OurManagement->image) {
                        Storage::delete($OurManagement->image);
                    }

                    // Update the new image path
                    $OurManagement->image = $filePath;
                }
                $OurManagement->name = $request->input('name');
                $OurManagement->designation = $request->input('designation');
                $OurManagement->address = $request->input('address');
                $OurManagement->phone = $request->input('phone');
                $OurManagement->created_by = $user->id;
                $OurManagement->updated_by = $user->id;
                // Save the user object
                $Save = $OurManagement->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            $websiteSetting = Setting::first();
            $OurManagement = OurManagement::find($id);
            return view('admin.edit-managment-members', compact('websiteSetting', 'OurManagement'));
        }
    }
    public function deleteManagmentMember($id)
    {
        $slider = OurManagement::find($id);
        if ($slider) {
            Storage::delete($slider->id);
            $slider->delete();

            return redirect()->back()->with('success', 'Member deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Member not found.');
        }
    }
}
