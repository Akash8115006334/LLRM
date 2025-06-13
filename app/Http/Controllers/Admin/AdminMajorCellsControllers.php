<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MajorCell;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminMajorCellsControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $MajorCell = MajorCell::first();
        return view('admin.major-cells', compact('user', 'websiteSetting', 'MajorCell'));
    }

    public function editMajorCell(Request $request)
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
                    $MajorCell = MajorCell::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $MajorCell = new MajorCell();
                }


                $MajorCell->title = $request->input('title');
                $MajorCell->content = $request->input('content');
                $MajorCell->created_by = $user->id;
                $MajorCell->updated_by = $user->id;


                // Save the MajorCell object
                $Save = $MajorCell->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.major-cells');
        }
    }
}
