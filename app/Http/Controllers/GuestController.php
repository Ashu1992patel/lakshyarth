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
        return view('frontend.pages.home');
    }

    function about()
    {
        return view('frontend.pages.about');
    }

    function products()
    {
        return view('frontend.pages.products');
    }

    function blogs()
    {
        return view('frontend.pages.blogs');
    }

    function contact()
    {
        return view('frontend.pages.contact');
    }

    function subscribe(NewsLetterRequest $request)
    {
        NewsLetter::create([
            "email" => $request->email
        ]);
        return redirect()->back()->with("success", "Congratulation! you have subscribed our neswletter.");
    }
}
