<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
}
