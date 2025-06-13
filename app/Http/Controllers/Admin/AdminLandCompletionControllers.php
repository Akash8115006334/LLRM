<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LandCompletion;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminLandCompletionControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $LandCompletion = LandCompletion::first();
        return view('admin.land-completion', compact('user', 'websiteSetting', 'LandCompletion'));
    }

    public function editLandCompletion(Request $request)
    {

        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "content" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('Id')) {
                    // Update existing social media entry
                    $LandCompletion = LandCompletion::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $LandCompletion = new LandCompletion();
                }


                $LandCompletion->title = $request->input('title');
                $LandCompletion->content = $request->input('content');
                $LandCompletion->created_by = $user->id;
                $LandCompletion->updated_by = $user->id;


                // Save the LandCompletion object
                $Save = $LandCompletion->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.land-completion');
        }
    }
}
