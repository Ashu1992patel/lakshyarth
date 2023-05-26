<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Farmer extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $with = ['acquirements'];

    protected $fillable = ['name', 'kisan_id', 'primary_contact', 'secondary_contact', 'village', 'gender', 'comment', 'photo', 'aadhaar_card'];

    // protected $attributes = [
    //     'kisan_id' => random_int(10000, 200000)
    // ];

    // public function setKisanIdAttribute($value)
    // {
    //     $this->attributes['kisan_id'] = random_int(10000, 200000);
    // }

    public function getAadhaarStatusAttribute($value)
    {
        if (file_exists(url($this->attributes['aadhaar_card']))) {
            return true;
        } else {
            return false;
        }
    }

    public function getPhotoStatusAttribute($value)
    {
        if (file_exists(url($this->attributes['photo']))) {
            return true;
        } else {
            return false;
        }
    }

    public function getCreatedAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y g:i A');
    }

    public function getDashboardCreatedAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }

    public function getUpdatedAttribute($value)
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d-M-Y g:i A');
    }

    public function getPhoneAttribute($value)
    {
        $phone = '';
        if ($this->attributes['primary_contact'] != null) {
            $phone .= $this->attributes['primary_contact'];
        }
        if ($this->attributes['secondary_contact']) {
            $phone .= ', ' . $this->attributes['secondary_contact'];
        }
        return $phone;
    }

    // All relationships

    public function acquirements(): HasMany
    {
        return $this->hasMany(Acquirement::class, 'farmer_id');
    }
}
