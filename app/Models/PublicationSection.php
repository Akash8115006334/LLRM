<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicationSection extends Model
{
    use HasFactory;
    protected $table = 'publication_secton';
    protected $fillable = [
        'title',
        'subtitle',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
    ];
}
