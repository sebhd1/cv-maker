<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
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

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
