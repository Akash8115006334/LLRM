<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;
use Carbon\Exceptions\Exception;

class EnquiryController extends Controller
{

    public function enquiry_form(Request $request)
    {
        if ($request->isMethod("post") && $request->input("enquiry_type") == "Enquiry Form") {
            $rules = [
                "name" => "required",
                "father_name" => "required",
                "dob" => "required|date",
                "email" => "required|email",
                "phone" => "required|digits:10",
                "course_name" => "required",
                "message" => "required|min:10",
            ];
            $messages = [
                "name.required" => "Name Required",
                "father_name.required" => "Father Name Required",
                "dob.required" => "Date of Birth Required",
                "dob.date" => "Invalid Date of Birth",
                "course_name.required" => "Course Name Required",
                "email.required" => "Email Required",
                "email.email" => "Invalid Email",
                "phone.required" => "Mobile Required",
                "phone.digits" => "Please enter 10 digit phone number",
                "message.required" => "Message Required",
                "message.min" => "Very Short Message",
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator, "enquiry")->withInput()->with('popup', true);
            }

            $enquiry = new Enquiry();
            $enquiry->name = $request->input("name");
            $enquiry->father_name = $request->input("father_name");
            $enquiry->dob = $request->input("dob");
            $enquiry->email = $request->input("email");
            $enquiry->phone = $request->input("phone");
            $enquiry->message = $request->input("message");
            $enquiry->course_name = $request->input("course_name");
            $enquiry->enquiry_type = $request->input("enquiry_type");
            $save = $enquiry->save();

            $MailData = [
                $request->name,
                $request->father_name,
                $request->dob,
                $request->email,
                $request->phone,
                $request->course_name,
                $request->message,
            ];

            if ($save) {
                try {
                    Mail::to("llrmedu@rediffmail.com")->send(new EnquiryMail($MailData));
                    return redirect()->back()->with('status', 'success')->with('message', 'We appreciate you contacting us. One of our colleagues will get back in touch with you soon!Have a great day!')->with('popup', true);
                } catch (Exception $th) {
                    return redirect()->back()->with('status', 'error')->with('message', 'Sorry! Please try again later')->with('popup', true);
                }
            } else {
                return redirect()->back()->with('status', 'error')->with('message', 'Some Error Occurred')->with('popup', true);
            }
        }
    }

    public function contact_form(Request $request)
    {
        if ($request->isMethod("post") && $request->input("enquiry_type") == "Contact Form") {
            // Validation rules and messages
            $rules = [
                "name" => "required",
                "email" => "required|email",
                "phone" => "required|digits:10",
                "subject" => "required",
                "message" => "required|min:10",
            ];
            $messages = [
                "name.required" => "Name Required",
                "email.required" => "Email Required",
                "email.email" => "Invalid Email",
                "phone.required" => "Mobile Required",
                "phone.digits" => "Please enter 10 digit phone number",
                "subject.required" => "Subject Required",
                "message.required" => "Message Required",
                "message.min" => "Very Short Message",
            ];

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect()->route("contact")->withErrors($validator, "enquiry")->withInput();
            }

            // Save enquiry
            $enquiry = new Enquiry();
            $enquiry->name = $request->input("name");
            $enquiry->email = $request->input("email");
            $enquiry->phone = $request->input("phone");
            $enquiry->subject = $request->input("subject");
            $enquiry->message = $request->input("message");
            $enquiry->enquiry_type = $request->input("enquiry_type");
            $save = $enquiry->save();

            // Mail data
            $MailData = [
                $request->name,
                $request->email,
                $request->phone,
                $request->subject,
                $request->message,
            ];

            if ($save) {
                try {
                    Mail::to("llrmedu@rediffmail.com")->send(new ContactMail($MailData));
                    return back()->with('status', 'success')->with('message', 'We appreciate you contacting us. One of our colleagues will get back in touch with you soon!Have a great day!');
                } catch (Exception $th) {
                    return back()->with('status', 'error')->with('message', 'Sorry! Please try again later');
                }
            } else {
                return back()->with('status', 'error')->with('message', 'Some Error Occurred');
            }
        }
    }
}
