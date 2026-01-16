<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'director',
        'genre_id',
        'release_year',
        'available'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}