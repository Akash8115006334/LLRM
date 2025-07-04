<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        "websiteName",
        "websiteTagline",
        "websiteLink",
        "websiteLogo",
        "websitePrimaryPhoneNo",
        "websiteAlternatePhoneNo",
        "websiteAdditionalPhoneNo",
        "websitePrimaryEmailId",
        "websiteAlternateEmailId",
        "websiteAdditionalEmailId",
        "websiteAddress",
        "websiteMapUrl",
        'created_by',
        'updated_by',
    ];

    protected $hidden = [
        'created_by',
        'updated_by',
    ];
}
