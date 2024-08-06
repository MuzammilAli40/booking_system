<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'organizer',
        'meeting_time',
        'participants',
    ];

    protected $casts = [
        'meeting_time' => 'datetime',
        'participants' => 'array',
    ];
}