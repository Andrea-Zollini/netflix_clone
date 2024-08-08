<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description',
        'genre',
        'release_date',
        'poster_path',
        'tmdb_id'
    ];

    public function watchlist()
    {
        return $this->hasMany(Watchlist::class);
    }
}
