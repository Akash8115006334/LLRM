<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GalleryCard;
use App\Models\GallerySections;
use App\Models\GallerySlider;
use App\Models\Setting;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminGalleryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $socialMedia = SocialMedia::first();
        $websiteSetting = Setting::first();
        $GallerySections = GallerySections::first();
        $sliders = GallerySlider::get()->all();
        $cards = GalleryCard::get()->all();
        return view('admin.gallery', compact('user', 'socialMedia', 'websiteSetting', 'sliders', 'cards', 'GallerySections'));
    }
    public function updateGallerySection(Request $request)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "title" => 'required',
                    "subtitle" => 'required',

                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }

                if ($request->has('sectionId')) {
                    // Update existing social media entry
                    $GallerySection = GallerySections::findOrNew($request->input('sectionId'));
                } else {
                    // Create a new social media entry
                    $GallerySection = new GallerySections();
                }

                $GallerySection->title = $request->input('title');
                $GallerySection->subtitle = $request->input('subtitle');
                $GallerySection->created_by = $user->id;
                $GallerySection->updated_by = $user->id;


                // Save the GallerySection object
                $Save = $GallerySection->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.setting');
        }
    }
    public function addSliderImage(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $gallerySlider = new GallerySlider();
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_gallery_slider" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/gallery-slider', $filename);

                    // Remove the old image from the folder and database
                    if ($gallerySlider->image) {
                        Storage::delete($gallerySlider->image);
                    }

                    // Update the new image path
                    $gallerySlider->image = $filePath;
                }
                $gallerySlider->created_by = $user->id;
                $gallerySlider->updated_by = $user->id;
                // Save the user object
                $Save = $gallerySlider->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.gallery', compact('user'));
        }
    }
    public function addGalleryCard(Request $request)
    {
        $user = $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'required|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }
                // Create a new social media entry
                $galleryCard = new GalleryCard();

                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_gallery_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/gallery-image', $filename);

                    // Remove the old image from the folder and database
                    if ($galleryCard->image) {
                        Storage::delete($galleryCard->image);
                    }

                    // Update the new image path
                    $galleryCard->image = $filePath;
                }
                $galleryCard->description = $request->input('description');
                $galleryCard->created_by = $user->id;
                $galleryCard->updated_by = $user->id;
                // Save the user object
                $Save = $galleryCard->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.gallery', compact('user'));
        }
    }
    public function editSliderCard(Request $request, $id)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    "image" => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "description" => 'required',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator);
                }

                $galleryCard = GalleryCard::find($id);

                if (!$galleryCard) {
                    return redirect()->back()->with("error", "Gallery card not found");
                }

                // Update image if a new one is provided
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_gallery_card" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/gallery-image', $filename);

                    // Remove the old image from the folder
                    if ($galleryCard->image) {
                        Storage::delete($galleryCard->image);
                    }

                    // Update the image path
                    $galleryCard->image = $filePath;
                }

                // Update other attributes
                $galleryCard->description = $request->input('description');
                $galleryCard->updated_by = $user->id;

                // Save the updated card
                $saved = $galleryCard->save();

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
        $cards = GalleryCard::find($id);
        return view('admin.edit-gallery', compact('user', 'websiteSetting', 'cards'));
    }

    public function deleteSliderImage($id)
    {
        $slider = GallerySlider::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Slider image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Slider image not found.');
        }
    }
    public function deleteSliderCard($id)
    {
        $slider = GalleryCard::find($id);
        if ($slider) {
            Storage::delete($slider->image);
            $slider->delete();

            return redirect()->back()->with('success', 'Slider image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Slider image not found.');
        }
    }
}
