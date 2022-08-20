<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovtOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'go_subject',
        'go_date',
        'go_doc',
        'order_by',
    ];
}
