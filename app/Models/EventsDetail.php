<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventsDetail extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(EventsCategory::class, 'categoryId');
    }
}
