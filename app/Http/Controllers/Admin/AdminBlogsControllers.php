<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogsCategory;
use App\Models\BlogsDetail;
use App\Models\BlogsTag;
use App\Models\EventsCategory;
use App\Models\EventsDetail;
use App\Models\HomeAboutUs;
use App\Models\HomeSlider;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminBlogsControllers extends Controller
{

    public function showBlogCategories()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $BlogsCategory = BlogsCategory::all();
        $BlogsTag = BlogsTag::all();
        return view('admin.blog-categories', compact('user', 'websiteSetting', 'BlogsCategory', 'BlogsTag'));
    }
    public function addBlogCategories(Request $request)
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
                $BlogsCategory = new BlogsCategory();
                $BlogsCategory->category = $request->input('category');
                $BlogsCategory->created_by = $user->id;
                $BlogsCategory->updated_by = $user->id;
                // Save the user object
                $Save = $BlogsCategory->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.blog-categories');
        }
    }
    public function addBlogTags(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "tags" => "required",
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $BlogsTag = new BlogsTag();
                $BlogsTag->tags = $request->input('tags');
                $BlogsTag->created_by = $user->id;
                $BlogsTag->updated_by = $user->id;
                // Save the user object
                $Save = $BlogsTag->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.blog-categories');
        }
    }
    public function editBlogCategories(Request $request, $id)
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
                $eventCategory = BlogsCategory::find($id);
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
            $BlogsCategory = BlogsCategory::find($id);

            // If it's not a POST request, just load the view
            return view('admin.edit-blog-categories', compact('websiteSetting', 'BlogsCategory'));
        }
    }
    public function editBlogTags(Request $request, $id)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "tags" => "required",
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                // Find the event category by its ID
                $BlogsTag = BlogsTag::find($id);
                if (!$BlogsTag) {
                    return redirect()->back()->with("error", "Event category not found");
                }

                // Update the category details
                $BlogsTag->tags = $request->input('tags');
                $BlogsTag->updated_by = $user->id;

                // Save the updated category
                $saved = $BlogsTag->save();

                if ($saved) {
                    return redirect()->back()->with("success", "Category updated successfully");
                } else {
                    return redirect()->back()->with("error", "Something went wrong");
                }
            }
            $websiteSetting = Setting::first();
            $BlogsTag = BlogsTag::find($id);
            // If it's not a POST request, just load the view
            return view('admin.edit-blog-tags', compact('websiteSetting', 'BlogsTag'));
        }
    }
    public function showBlogDetails()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $BlogsDetail = BlogsDetail::all();
        $BlogsCategory = BlogsCategory::all();
        $BlogsTag = BlogsTag::all();
        return view('admin.blog-details', compact('user', 'websiteSetting', 'BlogsDetail', 'BlogsCategory', 'BlogsTag'));
    }

    public function addBlogDetails(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => "required",
                    "categoryId" => "required",
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => "required",
                    "TagsId" => "required",
                    "date" => "required",
                    "time" => "required",
                    "authorName" => "required",

                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $BlogsDetail = new BlogsDetail();
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_event_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/blog-image', $filename);

                    // Remove the old image from the folder and database
                    if ($BlogsDetail->image) {
                        Storage::delete($BlogsDetail->image);
                    }

                    // Update the new image path
                    $BlogsDetail->image = $filePath;
                }

                $BlogsDetail->title = $request->input('title');
                $BlogsDetail->description = $request->input('description');
                $BlogsDetail->TagsId = $request->input('TagsId');
                $BlogsDetail->categoryId = $request->input('categoryId');
                $BlogsDetail->date = $request->input('date');
                $BlogsDetail->time = $request->input('time');
                $BlogsDetail->authorName = $request->input('authorName');
                $BlogsDetail->created_by = $user->id;
                $BlogsDetail->updated_by = $user->id;
                // Save the user object
                $Save = $BlogsDetail->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.blog-details');
        }
    }
    public function editBlogDetails(Request $request, $id)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "title" => "required",
                    "categoryId" => "required",
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => "required",
                    "TagsId" => "required",
                    "date" => "required",
                    "time" => "required",
                    "authorName" => "required",
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                // Find the event category by its ID
                $BlogsDetail = BlogsDetail::find($id);
                if (!$BlogsDetail) {
                    return redirect()->back()->with("error", "Event category not found");
                }

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_event_image" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/blog-image', $filename);

                    // Remove the old image from the folder and database
                    if ($BlogsDetail->image) {
                        Storage::delete($BlogsDetail->image);
                    }

                    // Update the new image path
                    $BlogsDetail->image = $filePath;
                }

                $BlogsDetail->title = $request->input('title');
                $BlogsDetail->description = $request->input('description');
                $BlogsDetail->TagsId = $request->input('TagsId');
                $BlogsDetail->categoryId = $request->input('categoryId');
                $BlogsDetail->date = $request->input('date');
                $BlogsDetail->time = $request->input('time');
                $BlogsDetail->authorName = $request->input('authorName');
                $BlogsDetail->created_by = $user->id;
                $BlogsDetail->updated_by = $user->id;

                $BlogsDetail->created_by = $user->id;
                $BlogsDetail->updated_by = $user->id;
                // Save the user object
                $Save = $BlogsDetail->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Event Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
        }
        $websiteSetting = Setting::first();
        $BlogsDetail = BlogsDetail::find($id);
        $BlogsCategory = BlogsCategory::all();
        $BlogsTag = BlogsTag::all();
        return view('admin.edit-blog-details', compact('user', 'websiteSetting', 'BlogsDetail', 'BlogsCategory', 'BlogsTag'));
    }
    public function deleteBlogsCategory($id)
    {
        $slider = BlogsCategory::find($id);
        if ($slider) {
            $slider->delete();

            return redirect()->back()->with('success', 'Events Category deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Events Category not found.');
        }
    }
    public function deleteBlogsTags($id)
    {
        $slider = BlogsTag::find($id);
        if ($slider) {
            $slider->delete();

            return redirect()->back()->with('success', 'Events Category deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Events Category not found.');
        }
    }
    public function deleteBlogDetails($id)
    {
        $slider = BlogsDetail::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Blog  deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Blog  not found.');
        }
    }
}
