<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'synopsis', 'duration', 'youtube', 'cover', 'released_at', 'category_id'];

    protected $casts = [
        'released_at' => 'datetime:Y-m-d',
    ];
    
    public function formatDuration()
    {
        $hours = floor($this->duration / 60); // 134 => 2
        $minutes = $this->duration % 60; // 134 => 14

        return $hours.'h'.$minutes;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}