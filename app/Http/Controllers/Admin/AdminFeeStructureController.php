<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeeStructure;
use App\Models\Setting;
use App\Models\Undertaking;
use App\Models\FeeStructureSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class AdminFeeStructureController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $FeeStructureSection = FeeStructureSection::first();
        $FeeStructure = FeeStructure::all();
        return view('admin.fee-structure', compact('user', 'websiteSetting', 'FeeStructureSection', 'FeeStructure'));
    }

    public function updatefeeStructureSection(Request $request)
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
                    $FeeStructureSection = FeeStructureSection::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $FeeStructureSection = new FeeStructureSection();
                }


                $FeeStructureSection->title = $request->input('title');
                $FeeStructureSection->subtitle = $request->input('subtitle');
                $FeeStructureSection->created_by = $user->id;
                $FeeStructureSection->updated_by = $user->id;


                // Save the FeeStructureSection object
                $Save = $FeeStructureSection->save();

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

    // public function addfeeStructure(Request $request)
    // {
    //     $user = $user = auth()->user();
    //     if ($user->user_type === 'Admin') {
    //         if ($request->isMethod("post")) {
    //             $validator = Validator::make($request->all(), [
    //                 "image" => 'required|mimes:pdf|max:2048',
    //             ]);
    //             if ($validator->fails()) {
    //                 return redirect()->back()->withInput()->withErrors($validator);
    //             }
    //             // Create a new social media entry
    //             $Undertaking = new Undertaking();
    //             if ($request->hasFile("image")) {
    //                 $file = $request->file("image");
    //                 $filename = time() . "_Undertaking_image" . '.' . $file->getClientOriginalExtension();
    //                 $filePath = $file->storeAs('public/about-image', $filename);

    //                 // Remove the old image from the folder and database
    //                 if ($Undertaking->image) {
    //                     Storage::delete($Undertaking->image);
    //                 }

    //                 // Update the new image path
    //                 $Undertaking->image = $filePath;
    //             }
    //             $Undertaking->created_by = $user->id;
    //             $Undertaking->updated_by = $user->id;
    //             // Save the user object
    //             $Save = $Undertaking->save();
    //             if ($Save) {
    //                 return redirect()->back()->with("success", "Details updated successfully");
    //             } else {
    //                 return redirect()->back()->with("error", "Some thing went worng");
    //             }
    //         }
    //         return view('admin.undertaking');
    //     }
    // }

    public function addFeeStructure(Request $request)
    {
        $user = auth()->user();

        // Ensure only Admin users can perform this action
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                // Validation rules for the PDF upload
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "image" => 'required|mimes:pdf|max:2048',
                ]);

                // Handle validation errors
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                // Create a new fee structure entry
                $feeStructure = new FeeStructure();

                // Handle the uploaded file
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_fee_structure" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/fee-structure-files', $filename);

                    // Remove the old file if exists
                    if ($feeStructure->image) {
                        Storage::delete($feeStructure->image);
                    }

                    // Save the new file path
                    $feeStructure->image = $filePath;
                }

                // Set audit fields
                $feeStructure->title = $request->input('title');
                $feeStructure->created_by = $user->id;
                $feeStructure->updated_by = $user->id;

                // Save the record to the database
                if ($feeStructure->save()) {
                    return redirect()->back()->with("success", "Fee Structure added successfully");
                } else {
                    return redirect()->back()->with("error", "Something went wrong, please try again");
                }
            }

            // Load the fee structure form view
            return view('admin.fee-structure');
        }

        // Redirect non-admin users
        return redirect()->route('dashboard')->with("error", "Unauthorized action");
    }

    // public function editfeeStructure(Request $request, $id)
    // {
    //     $user = auth()->user();
    //     if ($user->user_type === 'Admin') {
    //         if ($request->isMethod("post")) {
    //             $validator = Validator::make($request->all(), [

    //                 "image" => 'nullable|mimes:pdf|max:2048',
    //             ]);

    //             if ($validator->fails()) {
    //                 return redirect()->back()->withErrors($validator);
    //             }

    //             $Undertaking = FeeStructure::find($id);

    //             if (!$Undertaking) {
    //                 return redirect()->back()->with("error", "Gallery card not found");
    //             }

    //             if ($request->hasFile("image")) {
    //                 $file = $request->file("image");
    //                 $filename = time() . "_Undertaking_image" . '.' . $file->getClientOriginalExtension();
    //                 $filePath = $file->storeAs('public/about-image', $filename);

    //                 // Remove the old image from the folder and database
    //                 if ($Undertaking->image) {
    //                     Storage::delete($Undertaking->image);
    //                 }

    //                 // Update the new image path
    //                 $Undertaking->image = $filePath;
    //             }

    //             // Update other attributes
    //             $Undertaking->updated_by = $user->id;

    //             // Save the updated card
    //             $saved = $Undertaking->save();

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
    //     $FeeStructure = FeeStructure::find($id);
    //     return view('admin.edit-fee-structure', compact('user', 'websiteSetting', 'FeeStructure'));
    // }
    public function editfeeStructure(Request $request, $id)
    {
        $user = auth()->user();

        if ($user->user_type !== 'Admin') {
            return redirect()->back()->with("error", "Unauthorized action");
        }

        // Handle POST request for updating
        if ($request->isMethod("post")) {
            $validator = Validator::make($request->all(), [
                "title" => 'required',
                "image" => 'nullable|mimes:pdf|max:2048', // Allow optional PDF upload
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            $FeeStructure = FeeStructure::find($id);

            if (!$FeeStructure) {
                return redirect()->back()->with("error", "Fee structure not found");
            }

            // Handle file upload
            if ($request->hasFile("image")) {
                $file = $request->file("image");
                $filename = time() . "_FeeStructure_" . $file->getClientOriginalName();
                $filePath = $file->storeAs('public/fee-structure-pdfs', $filename);

                // Remove the old file if exists
                if ($FeeStructure->image) {
                    Storage::delete($FeeStructure->image);
                }

                // Save new file path
                $FeeStructure->image = $filePath;
            }

            // Update other attributes
            $FeeStructure->title = $request->input('title');
            $FeeStructure->updated_by = $user->id;

            // Save the updates
            $saved = $FeeStructure->save();

            if ($saved) {
                return redirect()->back()->with("success", "Fee structure updated successfully");
            } else {
                return redirect()->back()->with("error", "Something went wrong");
            }
        }

        // Handle GET request to show the edit page
        $websiteSetting = Setting::first();
        $FeeStructure = FeeStructure::find($id);
        return view('admin.edit-fee-structure', compact('user', 'websiteSetting', 'FeeStructure'));
    }

    public function deletefeeStructure($id)
    {
        $slider = FeeStructure::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Undertaking Image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Undertaking Image not found.');
        }
    }
}
