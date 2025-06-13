<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\StudentReviews;
use App\Models\StudentsReviewsSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminReviewsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $StudentReviews = StudentReviews::all();
        $StudentsReviewsSection = StudentsReviewsSection::first();
        return view('admin.reviews', compact('user', 'websiteSetting', 'StudentsReviewsSection', 'StudentReviews',));
    }

    public function updateReviewsSection(Request $request)
    {

        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "link" => 'nullable|url',

                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('sectionId')) {
                    // Update existing social media entry
                    $ReviewsSection = StudentsReviewsSection::findOrNew($request->input('sectionId'));
                } else {
                    // Create a new social media entry
                    $ReviewsSection = new StudentsReviewsSection();
                }

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_reviews_section_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/student-reviews', $filename);

                    // Remove the old image from the folder and database
                    if ($ReviewsSection->image) {
                        Storage::delete($ReviewsSection->image);
                    }

                    // Update the new image path
                    $ReviewsSection->image = $filePath;
                }
                $ReviewsSection->link = $request->input('link');
                $ReviewsSection->created_by = $user->id;
                $ReviewsSection->updated_by = $user->id;


                // Save the ReviewsSection object
                $Save = $ReviewsSection->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.reviews');
        }
    }

    public function addReviewsSection(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "content" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $StudentReviews = new StudentReviews();

                $StudentReviews->title = $request->input('title');
                $StudentReviews->content = $request->input('content');
                $StudentReviews->created_by = $user->id;
                $StudentReviews->updated_by = $user->id;
                // Save the user object
                $Save = $StudentReviews->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.reviews',);
        }
    }

    public function editStudentReviews(Request $request, $id)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "content" => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator);
                }

                $StudentReviews = StudentReviews::find($id);

                if (!$StudentReviews) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }


                // Update other attributes
                $StudentReviews->title = $request->input('title');
                $StudentReviews->content = $request->input('content');
                $StudentReviews->updated_by = $user->id;

                // Save the updated card
                $saved = $StudentReviews->save();

                if ($saved) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Something went wrong");
                }
            }
        } else {

            return redirect()->back()->with("error", "Unauthorized action");
        }

        $websiteSetting = Setting::first();
        $cards = StudentReviews::find($id);
        return view('admin.edit-review', compact('user', 'websiteSetting', 'cards'));
    }

    public function deleteStudentReviews($id)
    {
        $slider = StudentReviews::find($id);
        if ($slider) {
            Storage::delete($slider->id);
            $slider->delete();

            return redirect()->back()->with('success', 'Reviews deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Reviews not found.');
        }
    }
}
