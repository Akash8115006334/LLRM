<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsReviewsSection extends Model
{
    use HasFactory;
    protected $table = 'students_reviews_section';
    protected $fillable = [
        'image',
        'link',
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
    ];
}
