<?php

namespace App\Http\Controllers;

use App\Models\CustomerQuery;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        CustomerQuery::create($request->all());

        return redirect()->back()->with('success','Your query has been register successfully.');
    }
}
