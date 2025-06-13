<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use App\Models\MajorCell;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminAchievementsControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $Achievement = Achievement::first();
        return view('admin.achievements', compact('user', 'websiteSetting', 'Achievement'));
    }

    public function editAchievement(Request $request)
    {

        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "pdf" => 'required|mimes:pdf,doc,docx|max:2048',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('Id')) {
                    // Update existing social media entry
                    $Achievement = Achievement::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $Achievement = new Achievement();
                }

                // Update image if a new one is provided
                if ($request->hasFile("pdf")) {
                    $file = $request->file("pdf");
                    $filename = time() . "_achievement_doc_" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder
                    if ($Achievement->pdf) {
                        Storage::delete($Achievement->pdf);
                    }

                    // Update the pdf path
                    $Achievement->pdf = $filePath;
                }
                $Achievement->created_by = $user->id;
                $Achievement->updated_by = $user->id;


                // Save the Achievement object
                $Save = $Achievement->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.achievements');
        }
    }
}
