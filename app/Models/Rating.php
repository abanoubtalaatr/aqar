<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rateable_id',
        'rateable_type',
        'rating',
    ];

    public function rateable()
    {
        return $this->morphTo();
    }

    // Add the user relationship
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
