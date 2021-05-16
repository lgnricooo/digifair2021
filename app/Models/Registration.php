<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registration';
    protected $fillable = [
        'email',
        'name_participant',
        'position',
        'school',
        'district',
        'activities',
        'par_image',
        'co_image',
        'status',
        'name_coach',
    ];
}
