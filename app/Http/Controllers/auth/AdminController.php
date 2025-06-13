<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->user_type === 'Admin') {
            return redirect()->route('adminDashboard');
        }
        return view('auth.login');
    }
    /**
     * Loging User Here
     */
    public function validateLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('adminDashboard');
        }
        return redirect()->route('adminLogin')->with('error', 'Login details are invalid! Please check');
    }
    /**
     * Update Loging User Info Here
     */
    public function updateInfo(Request $request)
    {

        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {

                $validator = Validator::make($request->all(), [
                    "image" => 'image|mimes:jpeg,png,jpg,webp,gif|max:2048',
                    "firstName" => 'required',
                    "lastName" => 'required',
                    "mobile_no" => 'required|max:10',
                    "email" => 'required|email|unique:users,email,' . $user->id,
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withInput()->withErrors($validator)->withInput(['user' => $user]);
                }

                $user->name = $request->input('firstName') . ' ' . $request->input('lastName');
                $user->mobile_no = $request->input('mobile_no');
                $user->email = $request->input('email');
                if ($request->hasFile("image")) {
                    $file = $request->file("image");
                    $filename = time() . "_user_profile_pic" . '.' . $file->getClientOriginalExtension();
                    $filePath = $file->storeAs('public/user-profile', $filename);

                    // Remove the old image from the folder and database
                    if ($user->image) {
                        Storage::delete($user->image);
                    }

                    // Update the new image path
                    $user->image = $filePath;
                }
                // Save the user object
                $Save = $user->save();
                if ($Save) {
                    return redirect()->back()->with("success", "Details updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }

            return view('admin.setting', compact('user'));
        }
    }
    /**
     * Update Loging User Password Here
     */
    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        if ($user->user_type === 'Admin') {
            if ($request->isMethod("post")) {
                $validator = Validator::make($request->all(), [
                    'password' => 'required|min:6',
                    'newpassword' => 'required|min:6',
                    'confirmPassword' => 'required|same:newpassword',
                ]);
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator);
                }
                //Verify the current password
                if (!Hash::check($request->password, $user->password)) {
                    return redirect()->back()->with('error', 'Current password is incorrect.');
                }
                //Set the new password
                $user->password = Hash::make($request->newpassword);
                $Save = $user->save();
                if ($Save) {
                    session(['activeTab' => 'profile-change-password']);
                    return redirect()->back()->with("success", "User Password updated successfully");
                } else {
                    return redirect()->back()->with("error", "Some thing went worng");
                }
            }
            return view('admin.setting');
        }
    }
    /**
     * Log the user out of the application.
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('adminLogin');
    }
}
