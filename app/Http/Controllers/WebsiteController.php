<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactEmail;

class WebsiteController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.home');
    }

    public function about()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.about');
    }

    public function course()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.course');
    }

    public function courseDetails($id)
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.courseDetails');
    }

    public function contact()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.contact');
    }

    public function instructor()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.instructor');
    }

    public function testimonial()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.testimonial');
    }

    public function feature()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.feature');
    }

    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send email
        Mail::to('support@officersgurukul.com')->send(new ContactEmail($data));
        return redirect()->back()->with('success', 'Email sent successfully!');
        //return response()->json(['message' => 'Email sent successfully!']);
    }

    public function privacyPolicy()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.privacy');
    }

    public function termCondition()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.termCondition');
    }

    public function faq()
    {
        // Fetch all products from the database
        $products = '';
        // Return a view with the products data
        return view('frontend.websites.faq');
    }
}
