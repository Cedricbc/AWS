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
        if(env('APP_ENV') == 'prod'){
            return env('AWS_BUCKET_URL').'storage/Documents/'.$value;
        }
        if(env('APP_ENV') == 'cloud'){
            return env('AWS_CLOUD_FRONT_URL').'storage/Documents/'.$value;
        }
        return env('APP_URL').'storage/Documents/'.$value;
    }
}
