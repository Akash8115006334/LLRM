<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAboutUs;
use App\Models\HomeSlider;
use App\Models\Setting;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminTermsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $terms = Term::first();
        $sliders = HomeSlider::all();
        return view('admin.terms', compact('user', 'websiteSetting', 'sliders', 'terms'));
    }
    public function addTerms(Request $request)
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
                    $Term = Term::findOrNew($request->input('termsId'));
                } else {
                    // Create a new social media entry
                    $Term = new Term();
                }
                $Term->content = $request->input('content');
                $Term->created_by = $user->id;
                $Term->updated_by = $user->id;
                // Save the user object
                $Save = $Term->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.terms');
        }
    }
}
