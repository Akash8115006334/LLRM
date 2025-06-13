<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Communitie;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminCommunityControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $Communitie = Communitie::first();
        return view('admin.community', compact('user', 'websiteSetting', 'Communitie'));
    }

    public function editCommunity(Request $request)
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
                    $Communitie = Communitie::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $Communitie = new Communitie();
                }


                $Communitie->title = $request->input('title');
                $Communitie->content = $request->input('content');
                $Communitie->created_by = $user->id;
                $Communitie->updated_by = $user->id;


                // Save the Communitie object
                $Save = $Communitie->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.community');
        }
    }
}
