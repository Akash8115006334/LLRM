<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CollegeMap;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminCollegeMapControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $CollegeMap = CollegeMap::first();
        return view('admin.college-map', compact('user', 'websiteSetting', 'CollegeMap'));
    }
    public function editCollegeMap(Request $request)
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
                    $CollegeMap = CollegeMap::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $CollegeMap = new CollegeMap();
                }


                $CollegeMap->title = $request->input('title');
                $CollegeMap->content = $request->input('content');
                $CollegeMap->created_by = $user->id;
                $CollegeMap->updated_by = $user->id;


                // Save the CollegeMap object
                $Save = $CollegeMap->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.college-map');
        }
    }
}
