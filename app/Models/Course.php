<?php

namespace App\Models;

use App\Models\Concerns\HasDuration;
use App\Models\Concerns\PerUser;
use App\Models\Concerns\WithDuration;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model implements HasDuration
{
    use PerUser;
    use WithDuration;

    protected $fillable = [
        'course',
        'institution',
        'start_date',
        'end_date',
        'expires_at',
        'token',
        'user_id',
        'deleted_at'
    ];

    protected $casts = [
        'expires_at' => 'date:Y-m-d',
    ];
}
