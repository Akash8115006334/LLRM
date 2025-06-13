<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventsCategory;
use App\Models\EventsDetail;
use App\Models\HomeAboutUs;
use App\Models\HomeSlider;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminEventsControllers extends Controller
{
    public function showEventCategories()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $EventsCategory = EventsCategory::all();
        return view('admin.event-categories', compact('user', 'websiteSetting', 'EventsCategory'));
    }
    public function addEventCategories(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "category" => "required",
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $EventsCategory = new EventsCategory();
                $EventsCategory->category = $request->input('category');
                $EventsCategory->created_by = $user->id;
                $EventsCategory->updated_by = $user->id;
                // Save the user object
                $Save = $EventsCategory->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.event-categories');
        }
    }
    public function editEventCategories(Request $request, $id)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "category" => "required",
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                // Find the event category by its ID
                $eventCategory = EventsCategory::find($id);
                if (!$eventCategory) {
                    return redirect()->back()->with("error", "Event category not found");
                }

                // Update the category details
                $eventCategory->category = $request->input('category');
                $eventCategory->updated_by = $user->id;

                // Save the updated category
                $saved = $eventCategory->save();

                if ($saved) {
                    return redirect()->back()->with("success", "Category updated successfully");
                } else {
                    return redirect()->back()->with("error", "Something went wrong");
                }
            }
            $websiteSetting = Setting::first();
            $EventsCategory = EventsCategory::find($id);
            // If it's not a POST request, just load the view
            return view('admin.edit-event-categories', compact('websiteSetting', 'EventsCategory'));
        }
    }

    public function showEventDetails()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $EventsDetail = EventsDetail::all();
        $EventsCategory = EventsCategory::all();
        return view('admin.event-details', compact('user', 'websiteSetting', 'EventsDetail', 'EventsCategory'));
    }

    public function addEventDetails(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "event_title" => "required",
                    "categoryId" => "required",
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => "required",
                    "event_subtitle_desc" => "required",
                    "start" => "required",
                    "end" => "required",
                    "start_time" => "required",
                    "end_time" => "required",
                    "city" => "required",
                    "state" => "required",
                    "country" => "required",
                    "total_slot" => "required",
                    "booked_slot" => "required",
                    "website" => "nullable",
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $EventsDetail = new EventsDetail();
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_event_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/event-image', $filename);

                    // Remove the old image from the folder and database
                    if ($EventsDetail->image) {
                        Storage::delete($EventsDetail->image);
                    }

                    // Update the new image path
                    $EventsDetail->image = $filePath;
                }

                $EventsDetail->event_title = $request->input('event_title');
                $EventsDetail->description = $request->input('description');
                $EventsDetail->event_subtitle_desc = $request->input('event_subtitle_desc');
                $EventsDetail->categoryId = $request->input('categoryId');
                $EventsDetail->start = $request->input('start');
                $EventsDetail->end = $request->input('end');
                $EventsDetail->start_time = $request->input('start_time');
                $EventsDetail->end_time = $request->input('end_time');
                $EventsDetail->city = $request->input('city');
                $EventsDetail->state = $request->input('state');
                $EventsDetail->country = $request->input('country');
                $EventsDetail->total_slot = $request->input('total_slot');
                $EventsDetail->booked_slot = $request->input('booked_slot');
                $EventsDetail->website = $request->input('website');

                $EventsDetail->created_by = $user->id;
                $EventsDetail->updated_by = $user->id;
                // Save the user object
                $Save = $EventsDetail->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.event-categories');
        }
    }
    public function editEventDetails(Request $request, $id)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "event_title" => "required",
                    "categoryId" => "required",
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => "required",
                    "event_subtitle_desc" => "required",
                    "start" => "required",
                    "end" => "required",
                    "start_time" => "required",
                    "end_time" => "required",
                    "city" => "required",
                    "state" => "required",
                    "country" => "required",
                    "total_slot" => "required",
                    "booked_slot" => "required",
                    "website" => "nullable",
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                // Find the event category by its ID
                $EventsDetail = EventsDetail::find($id);
                if (!$EventsDetail) {
                    return redirect()->back()->with("error", "Event category not found");
                }

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_event_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/event-image', $filename);

                    // Remove the old image from the folder and database
                    if ($EventsDetail->image) {
                        Storage::delete($EventsDetail->image);
                    }

                    // Update the new image path
                    $EventsDetail->image = $filePath;
                }

                $EventsDetail->event_title = $request->input('event_title');
                $EventsDetail->description = $request->input('description');
                $EventsDetail->event_subtitle_desc = $request->input('event_subtitle_desc');
                $EventsDetail->categoryId = $request->input('categoryId');
                $EventsDetail->start = $request->input('start');
                $EventsDetail->end = $request->input('end');
                $EventsDetail->start_time = $request->input('start_time');
                $EventsDetail->end_time = $request->input('end_time');
                $EventsDetail->city = $request->input('city');
                $EventsDetail->state = $request->input('state');
                $EventsDetail->country = $request->input('country');
                $EventsDetail->total_slot = $request->input('total_slot');
                $EventsDetail->booked_slot = $request->input('booked_slot');
                $EventsDetail->website = $request->input('website');

                $EventsDetail->created_by = $user->id;
                $EventsDetail->updated_by = $user->id;
                // Save the user object
                $Save = $EventsDetail->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Event Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
        }
        $websiteSetting = Setting::first();
        $EventsDetail = EventsDetail::find($id);
        $EventsCategory = EventsCategory::all();
        return view('admin.edit-event-details', compact('user', 'websiteSetting', 'EventsDetail', 'EventsCategory'));
    }
    public function deleteEventsCategory($id)
    {
        $slider = EventsCategory::find($id);
        if ($slider) {
            $slider->delete();

            return redirect()->back()->with('success', 'Events Category deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Events Category not found.');
        }
    }
    public function deleteEventDetails($id)
    {
        $slider = EventsDetail::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Events  deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Events  not found.');
        }
    }
}
