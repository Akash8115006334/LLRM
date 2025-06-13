<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Club;
use App\Models\Communitie;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminClubsControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $Club = Club::first();
        return view('admin.club', compact('user', 'websiteSetting', 'Club'));
    }

    public function editClub(Request $request)
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
                    $Club = Club::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $Club = new Club();
                }


                $Club->title = $request->input('title');
                $Club->content = $request->input('content');
                $Club->created_by = $user->id;
                $Club->updated_by = $user->id;


                // Save the Club object
                $Save = $Club->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.club');
        }
    }
}
