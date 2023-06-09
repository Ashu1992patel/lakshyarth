<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'status'
    ];

    public function getCreatedAttribute($value)
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y g:i A');
    }

    public function getUpdatedAttribute($value)
    {
        return Carbon::parse($this->attributes['updated_at'])->format('d-M-Y g:i A');
    }
}
