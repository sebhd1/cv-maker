<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'school',
        'name',
        'start_date',
        'end_date',
        'city',
        'country',
        'description',
        'user_id',
        'deleted_at'
    ];
}
