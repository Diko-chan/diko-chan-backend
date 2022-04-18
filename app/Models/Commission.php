<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    use HasFactory;

    protected $fillable = [
        'com_name',
        'com_age',
        'com_gender',
        'com_details',
        'com_image',
        'com_status',
    ];
}
