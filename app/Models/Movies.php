<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = ['movie_name','movie_description','movie_image'];

    public function getMovieImageAttribute($value)
    {
        return env('APP_URL').'storage/Documents/'.$value;
    }
}
