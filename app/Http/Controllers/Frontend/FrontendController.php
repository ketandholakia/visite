<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $body_class = '';

        // return view('dashboard', compact('body_class'));
        return view('frontend.index', compact('body_class'));
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    public function contact()
    {
        $body_class = '';
        return view('frontend.contact', compact('body_class'));
    }


    public function aboutus()
    {
        $body_class = '';
        return view('frontend.aboutus', compact('body_class'));
    }

    public function services()
    {
        $body_class = '';
        return view('frontend.services', compact('body_class'));
    }

    public function portfolio()
    {
        $body_class = '';
        return view('frontend.portfolio', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }
}