<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policie extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
    ];
}
