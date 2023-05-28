<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class RstSettlement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'user_id',
        'farmer_id',
        'acquirement_id',
        'weight',
        'percentage',
        'calculated_weight',
        'deducted_weight'
    ];

    public function farmer(): BelongsTo
    {
        return $this->belongsTo(Farmer::class, 'farmer_id');
    }

    public function acquirement(): BelongsTo
    {
        return $this->belongsTo(Acquirement::class, 'acquirement_id');
    }

    public function user(): HasOne
    {
        return $this->HasOne(User::class, 'user_id');
    }

    public function getCreatedAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y g:i A');
    }

    public function getUpdatedAttribute($value)
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d-M-Y g:i A');
    }
}
