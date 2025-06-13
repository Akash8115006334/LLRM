<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
    protected $fillable = [
        'pdf',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
    ];
}
