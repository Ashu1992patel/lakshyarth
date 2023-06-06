<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['logo', 'company_full_name', 'company_short_name', 'address', 'contact_primary', 'contact_secondary', 'email', 'footer_text', 'banner_image', 'box_image_1', 'box_image_2', 'box_image_3'];
}
