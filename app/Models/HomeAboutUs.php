<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'content',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
    ];
}
