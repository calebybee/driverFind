<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'email', 'city', 'state', 'salary', 'startdate', 'resume_path', 'aboutme', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
