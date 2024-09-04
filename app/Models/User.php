<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'deleted_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /***
     * @return HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    /***
     * @return HasMany
     */
    public function courses(): HasMany
    {
    return $this->hasMany(Course::class);
    }

    /***
     * @return HasMany
     */
    public function educations(): HasMany {
        return $this->hasMany(Education::class);
    }

    /***
     * @return HasMany
     */
    public function skills(): HasMany {
        return $this->hasMany(Skill::class);
    }

    /***
     * @return HasMany
     */
    public function languages(): HasMany {
        return $this->hasMany(Language::class);
    }

    /***
     * @return HasMany
     */
    public function socialLinks(): HasMany {
        return $this->hasMany(SocialLink::class);
    }

    /***
     * @return HasMany
     */
    public function employments(): HasMany {
        return $this->hasMany(Employment::class);
    }
}
