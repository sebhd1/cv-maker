<?php

namespace App\Models;

use App\Models\Concerns\HasDuration;
use App\Models\Concerns\PerUser;
use App\Models\Concerns\WithDuration;
use Illuminate\Database\Eloquent\Model;

class Education extends Model implements HasDuration
{
    use PerUser;
    use WithDuration;

    protected $table = 'educations';

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
