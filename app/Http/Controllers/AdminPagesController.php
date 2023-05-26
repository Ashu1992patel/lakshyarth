<?php

namespace App\Http\Controllers;

use App\Models\Acquirement;
use App\Models\Farmer;
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
        return view('dashboard', compact('farmers', 'acquirements', 'acquirementsCleared'));
    }
}
