<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_item_name',
        'menu_type_id',
        'page_id',
        'page_url',
        'parent',
        'publish',
        'order_by',
    ];
}
