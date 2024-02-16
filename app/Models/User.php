<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'first_name',
        'last_name',
        'email',
        'roll',
        'status',
        'photo',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // public function jobs()
    // {
    //     return $this->belongsToMany(jobs::class);
    // }
    public function jobs()
    {
        return $this->belongsToMany(jobs::class, 'apply_jobs', 'user_id', 'job_id');
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function profile_education()
    {
        return $this->hasOne(ProfileEducation::class);
    }
    public function profile_training()
    {
        return $this->hasOne(ProfileTraining::class);
    }
    public function profile_experience()
    {
        return $this->hasOne(ProfileExperience::class);
    }

}
