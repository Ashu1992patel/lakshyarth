<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        session()->put('settings', Setting::first(['logo', 'company_full_name', 'company_short_name', 'address', 'contact_primary', 'contact_secondary', 'email', 'footer_text', 'banner_image', 'box_image_1', 'box_image_2', 'box_image_3']));
    }
}
