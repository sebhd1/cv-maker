<?php

namespace App\Models;

use App\Models\Concerns\PerUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialLink extends Model
{
    use PerUser;

    protected $fillable = [
        'label',
        'link',
        'user_id',
        'deleted_at'
    ];
}
