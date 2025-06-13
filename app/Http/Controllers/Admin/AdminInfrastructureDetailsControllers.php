<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InfrastructureDetails;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminInfrastructureDetailsControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $InfrastructureDetails = InfrastructureDetails::first();
        return view('admin.infrastructure-details', compact('user', 'websiteSetting', 'InfrastructureDetails'));
    }
    public function editInfrastructureDetails(Request $request)
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
                    $InfrastructureDetails = InfrastructureDetails::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $InfrastructureDetails = new InfrastructureDetails();
                }


                $InfrastructureDetails->title = $request->input('title');
                $InfrastructureDetails->content = $request->input('content');
                $InfrastructureDetails->created_by = $user->id;
                $InfrastructureDetails->updated_by = $user->id;


                // Save the InfrastructureDetails object
                $Save = $InfrastructureDetails->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.infrastructure-details');
        }
    }
}
