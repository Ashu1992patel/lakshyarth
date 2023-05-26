<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
// use Illuminate\Database\Eloquent\Relations\HasOne;

class Acquirement extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['user_id', 'farmer_id', 'vehicle_type', 'vehicle_number', 'rst', 'weight', 'is_cleared', 'is_approved', 'comment', 'rst_file'];

    // All Queries
    public function scopeCleared($query, $value)
    {
        return $query->where('is_cleared', $value);
    }

    // All Accessors - rst_file_status
    public function getRSTFileStatusAttribute($value)
    {
        if (file_exists($this->attributes['rst_file'])) {
            return true;
        } else {
            return false;
        }
    }
    // created date
    public function getCreatedAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }

    // created time
    public function getTimeAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->format('g:i A');
    }
    // updated
    public function getUpdatedAttribute($value)
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d-M-Y g:i A');
    }
    // cleared
    public function getClearedAttribute($value)
    {
        if ($this->attributes['is_cleared']) {
            return 'Cleared';
        } else {
            return 'Not Cleared';
        }
    }
    // approved,
    public function getApprovedAttribute($value)
    {
        if ($this->attributes['is_approved']) {
            return 'Approved';
        } else {
            return 'Not Approved';
        }
    }
    // All relationships
    public function farmer(): BelongsTo
    {
        return $this->belongsTo(Farmer::class, 'farmer_id');
    }
}
