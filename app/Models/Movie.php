<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'synopsis', 'duration', 'youtube', 'cover', 'released_at'];

    protected $casts = [
        'released_at' => 'datetime:Y-m-d',
    ];
    
}