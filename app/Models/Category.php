<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // fillable
    protected $fillable = [
        'name',
        'description',
        'parent_id',
        'order',
        'is_menu',
        'status',
        'slug',
    ];
    
}