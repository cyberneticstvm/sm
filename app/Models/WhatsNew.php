<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsNew extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'doc_type',
        'url',
        'document',
        'category',
        'status',
    ];
}
