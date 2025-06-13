<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminCounterControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $counter1 = Counter::find(1) ?? '';
        $counter2 = Counter::find(2) ?? '';
        $counter3 = Counter::find(3) ?? '';
        $counter4 = Counter::find(4) ?? '';
        return view('admin.counters', compact('user', 'websiteSetting', 'counter1', 'counter2', 'counter3', 'counter4'));
    }

    public function addCounters(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'number' => 'required',
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',

                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                if ($request->has('Id')) {
                    // Update existing social media entry
                    $Counter = Counter::findOrNew($request->input('Id'));
                } else {
                    // Create a new social media entry
                    $Counter = new Counter();
                }


                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_about_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder and database
                    if ($Counter->image) {
                        Storage::delete($Counter->image);
                    }

                    // Update the new image path
                    $Counter->image = $filePath;
                }
                $Counter->title = $request->input('title');
                $Counter->number = $request->input('number');
                $Counter->created_by = $user->id;
                $Counter->updated_by = $user->id;
                // Save the user object
                $Save = $Counter->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.counter');
        }
    }
}
