<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
}
