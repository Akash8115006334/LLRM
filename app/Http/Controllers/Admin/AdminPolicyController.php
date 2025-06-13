<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutUs;
use App\Models\HomeSlider;
use App\Models\Policie;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminPolicyController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $Policie = Policie::first();
        $sliders = HomeSlider::all();
        return view('admin.privacy', compact('user', 'websiteSetting', 'Policie'));
    }
    public function addPolices(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "content" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                if ($request->has('termsId')) {
                    // Update existing social media entry
                    $Policie = Policie::findOrNew($request->input('termsId'));
                } else {
                    // Create a new social media entry
                    $Policie = new Policie();
                }
                $Policie->content = $request->input('content');
                $Policie->created_by = $user->id;
                $Policie->updated_by = $user->id;
                // Save the user object
                $Save = $Policie->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.privacy');
        }
    }
}
