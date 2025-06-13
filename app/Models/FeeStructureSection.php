<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructureSection extends Model
{
    use HasFactory;
    // Define the table name if it is not the plural of the model name
    protected $table = 'fee_structure_sections'; 
   
}
