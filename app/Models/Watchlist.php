<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;
    use HasUlids;

    protected $fillable = [
        'profile_id',
        'media_id',
        'status'
    ];

    public function media()
    {
        return $this->belongsTo(Media::class);
    }
}
