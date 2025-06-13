<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NcteRevised;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminNCTEControllers extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $websiteSetting = Setting::first();
        $NcteRevised = NcteRevised::all();
        return view('admin.ncte-revised', compact('user', 'websiteSetting', 'NcteRevised'));
    }

    public function editNcteRevised(Request $request)
    {

        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "pdf" => 'required|mimes:pdf,doc,docx|max:2048',
                    'title' => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator);
                }


                $NcteRevised = new NcteRevised();

                // Update image if a new one is provided
                if ($request->hasFile("pdf")) {
                    $file = $request->file("pdf");
                    $filename = time() . "_ncte_revised_doc_" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/about-image', $filename);

                    // Remove the old image from the folder
                    if ($NcteRevised->pdf) {
                        Storage::delete($NcteRevised->pdf);
                    }

                    // Update the pdf path
                    $NcteRevised->pdf = $filePath;
                }
                $NcteRevised->title = $request->input('title');
                $NcteRevised->created_by = $user->id;
                $NcteRevised->updated_by = $user->id;


                // Save the NcteRevised object
                $Save = $NcteRevised->save();

                // Check if the data was saved successfully
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.ncte-revised');
        }
    }

    public function deleteNcteRevised($id)
    {
        $slider = NcteRevised::find($id);
        if ($slider) {
            Storage::delete($slider->pdf);
            $slider->delete();

            return redirect()->back()->with('success', 'Slider image deleted successfully.');
        } else {

            return redirect()->back()->with('error', 'Slider image not found.');
        }
    }
}
