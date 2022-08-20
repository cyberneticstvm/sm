<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsAndEvents extends Model
{
    use HasFactory;

    protected $fillable = [
        'district',
        'date',
        'title',
        'img_url',
        'content',
    ];
}
