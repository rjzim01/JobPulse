<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }
    public function users()
    {
        return $this->belongsToMany(User::class, 'apply_jobs', 'job_id', 'user_id');
    }

}
