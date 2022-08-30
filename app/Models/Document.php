<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_type',
        'title',
        'description',
        'date',
        'attachment_type',
        'status',
        'doc_url',
    ];
}
