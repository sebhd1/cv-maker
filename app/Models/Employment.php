<?php

namespace App\Models;

use App\Models\Concerns\HasDuration;
use App\Models\Concerns\PerUser;
use App\Models\Concerns\WithDuration;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model implements HasDuration
{
    use PerUser;
    use WithDuration;

    protected $fillable = [
        'job_title',
        'employer',
        'start_date',
        'end_date',
        'city',
        'description',
        'user_id',
        'deleted_at'
    ];
}
