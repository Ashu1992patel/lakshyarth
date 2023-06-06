<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();
        return view('backend.settings.edit', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $mergredRequest = $request->all();

        // Uploading logo
        if (isset($request->logo) && $request->logo != null) {
            $mergredRequest['logo'] = photo_upload($request->logo, "logo", 'frontend/images', $setting->logo);
        }

        // Uploading banner_image
        if (isset($request->banner_image) && $request->banner_image != null) {
            $mergredRequest['banner_image'] = photo_upload($request->banner_image, "banner_image", 'frontend/images', $setting->banner_image);
        }

        // Uploading box_image_1
        if (isset($request->box_image_1) && $request->box_image_1 != null) {
            $mergredRequest['box_image_1'] = photo_upload($request->box_image_1, "box_image_1", 'frontend/images', $setting->box_image_1);
        }

        // Uploading box_image_2
        if (isset($request->box_image_2) && $request->box_image_2 != null) {
            $mergredRequest['box_image_2'] = photo_upload($request->box_image_2, "box_image_2", 'frontend/images', $setting->box_image_2);
        }

        // Uploading box_image_1
        if (isset($request->box_image_3) && $request->box_image_3 != null) {
            $mergredRequest['box_image_3'] = photo_upload($request->box_image_3, "box_image_3", 'frontend/images', $setting->box_image_3);
        }

        $setting->update($mergredRequest);

        notify()->success('Site setting has been updated successfully.');

        return redirect()->route('settings.index')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
