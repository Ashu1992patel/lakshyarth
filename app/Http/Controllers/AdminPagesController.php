<?php

namespace App\Http\Controllers;

use App\Models\Acquirement;
use App\Models\ClientRequest;
use App\Models\Farmer;
use App\Models\NewsLetter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    //
    function dashboard()
    {
        $farmers = Farmer::latest()->get();
        $acquirements = Acquirement::cleared(0)->latest()->get();
        $acquirementsCleared = Acquirement::cleared(1)->latest()->get();
        $client_requests = ClientRequest::count();
        $subscribers = NewsLetter::count();
        return view('dashboard', compact('farmers', 'acquirements', 'acquirementsCleared', 'client_requests', 'subscribers'));
    }
}
