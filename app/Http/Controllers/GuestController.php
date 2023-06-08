<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsLetterRequest;
use App\Models\NewsLetter;
use App\Models\Setting;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    function home()
    {
        // Theme 1
        return view('themes.theme1.pages.index');
        // Theme 2
        return view('frontend.pages.home');
    }

    function about()
    {
        // Theme 1
        return view('themes.theme1.pages.about');
        // Theme 2
        return view('frontend.pages.about');
    }

    function products()
    {
        // Theme 1
        return view('themes.theme1.pages.products');
        // Theme 2
        return view('frontend.pages.products');
    }

    function blogs()
    {
        // Theme 1
        return view('themes.theme1.pages.blogs');
        // Theme 2
        return view('frontend.pages.blogs');
    }

    function contact()
    {
        // Theme 1
        return view('themes.theme1.pages.contact');
        // Theme 2
        return view('frontend.pages.contact');
    }

    function services()
    {
        // Theme 1
        return view('themes.theme1.pages.services');
        // Theme 2
        // Not Available
    }

    function subscribe(NewsLetterRequest $request)
    {
        NewsLetter::create([
            "email" => $request->email
        ]);
        return redirect()->back()->with("success", "Congratulation! you have subscribed our neswletter.");
    }
}
