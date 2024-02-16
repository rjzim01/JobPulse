<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jobs;

class ApplyJob extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function jobs()
    {
        return $this->belongsTo(jobs::class, 'job_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
