<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $with = ['films'];

    protected $fillable = ['name'];

    public function films()
    {
        return $this->belongsToMany(Film::class, 'genge_films', 'genre_id', 'film_id')->withTimestamps();
    }
}
