<?php

namespace App\Models;

use App\Models\Concerns\PerUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use PerUser;

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'city',
        'user_id',
        'line1',
        'line2',
        'nationality',
        'postal_code',
        'driving_license',
        'date_of_birth',
        'place_of_birth',
        'bio',
        'deleted_at'
    ];

    protected $casts = [
        'deleted_at' => 'datetime',
        'date_of_birth' => 'date:Y-m-d',
    ];


    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
