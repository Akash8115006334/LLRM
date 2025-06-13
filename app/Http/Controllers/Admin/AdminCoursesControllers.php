<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoursesDetail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminCoursesControllers extends Controller
{

    public function showCoursesDetails()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $CoursesDetail = CoursesDetail::all();
        return view('admin.courses-details', compact('user', 'websiteSetting', 'CoursesDetail'));
    }

    public function addCoursesDetails(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => "required",
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => "required",
                    "event_subtitle_desc" => "required",
                    "modes_of_study" => "required",
                    "duration" => "required",
                    "academic_direction" => "required",
                    "method" => "required",
                    "campus" => "required",
                    "total_sheet" => "required",
                    "booked_sheet" => "required",
                    "seats_avilable" => "required",
                    "semester_start_date" => "required",
                    "Course_total_fee" => "required",
                    "first_year_fee" => "required",
                    "language" => "required"
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $CoursesDetail = new CoursesDetail();
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_event_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/blog-image', $filename);

                    // Remove the old image from the folder and database
                    if ($CoursesDetail->image) {
                        Storage::delete($CoursesDetail->image);
                    }

                    // Update the new image path
                    $CoursesDetail->image = $filePath;
                }

                $CoursesDetail->title = $request->input('title');
                $CoursesDetail->description = $request->input('description');
                $CoursesDetail->event_subtitle_desc = $request->input('event_subtitle_desc');
                $CoursesDetail->modes_of_study = $request->input('modes_of_study');
                $CoursesDetail->duration = $request->input('duration');
                $CoursesDetail->academic_direction = $request->input('academic_direction');
                $CoursesDetail->method = $request->input('method');
                $CoursesDetail->campus = $request->input('campus');
                $CoursesDetail->total_sheet = $request->input('total_sheet');
                $CoursesDetail->booked_sheet = $request->input('booked_sheet');
                $CoursesDetail->seats_avilable = $request->input('seats_avilable');
                $CoursesDetail->semester_start_date = $request->input('semester_start_date');
                $CoursesDetail->Course_total_fee = $request->input('Course_total_fee');
                $CoursesDetail->first_year_fee = $request->input('first_year_fee');
                $CoursesDetail->language = $request->input('language');
                $CoursesDetail->created_by = $user->id;
                $CoursesDetail->updated_by = $user->id;
                // Save the user object
                $Save = $CoursesDetail->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.courses-details');
        }
    }
    public function editCoursesDetails(Request $request, $id)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => "required",
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => "required",
                    "event_subtitle_desc" => "required",
                    "modes_of_study" => "required",
                    "duration" => "required",
                    "academic_direction" => "required",
                    "method" => "required",
                    "campus" => "required",
                    "total_sheet" => "required",
                    "booked_sheet" => "required",
                    "seats_avilable" => "required",
                    "semester_start_date" => "required",
                    "Course_total_fee" => "required",
                    "first_year_fee" => "required",
                    "language" => "required"
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                // Find the event category by its ID
                $CoursesDetail = CoursesDetail::find($id);
                if (!$CoursesDetail) {
                    return redirect()->back()->with("error", "Event category not found");
                }

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_event_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/blog-image', $filename);

                    // Remove the old image from the folder and database
                    if ($CoursesDetail->image) {
                        Storage::delete($CoursesDetail->image);
                    }

                    // Update the new image path
                    $CoursesDetail->image = $filePath;
                }

                $CoursesDetail->title = $request->input('title');
                $CoursesDetail->description = $request->input('description');
                $CoursesDetail->event_subtitle_desc = $request->input('event_subtitle_desc');
                $CoursesDetail->modes_of_study = $request->input('modes_of_study');
                $CoursesDetail->duration = $request->input('duration');
                $CoursesDetail->academic_direction = $request->input('academic_direction');
                $CoursesDetail->method = $request->input('method');
                $CoursesDetail->campus = $request->input('campus');
                $CoursesDetail->total_sheet = $request->input('total_sheet');
                $CoursesDetail->booked_sheet = $request->input('booked_sheet');
                $CoursesDetail->seats_avilable = $request->input('seats_avilable');
                $CoursesDetail->semester_start_date = $request->input('semester_start_date');
                $CoursesDetail->Course_total_fee = $request->input('Course_total_fee');
                $CoursesDetail->first_year_fee = $request->input('first_year_fee');
                $CoursesDetail->language = $request->input('language');
                $CoursesDetail->created_by = $user->id;
                $CoursesDetail->updated_by = $user->id;

                $CoursesDetail->created_by = $user->id;
                $CoursesDetail->updated_by = $user->id;
                // Save the user object
                $Save = $CoursesDetail->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Event Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
        }
        $websiteSetting = Setting::first();
        $CoursesDetail = CoursesDetail::find($id);
        return view('admin.edit-courses-details', compact('user', 'websiteSetting', 'CoursesDetail'));
    }

    public function deleteCoursesDetails($id)
    {
        $slider = CoursesDetail::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Blog  deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Blog  not found.');
        }
    }
}
