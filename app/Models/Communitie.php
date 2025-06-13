<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communitie extends Model
{
    use HasFactory;
    protected $table = 'communities';
    protected $fillable = [
        'title',
        'content',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
    ];
}
