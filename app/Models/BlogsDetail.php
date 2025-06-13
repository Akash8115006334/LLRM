<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogsDetail extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(BlogsCategory::class, 'categoryId');
    }
    public function tags()
    {
        return $this->belongsTo(BlogsTag::class, 'TagsId');
    }
}
