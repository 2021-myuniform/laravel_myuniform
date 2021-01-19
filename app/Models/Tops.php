<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tops extends Model
{
    use HasFactory;

    public function favorite_users()
    {
        return $this->belongsToMany(User::class, 'favorites', 'tops_id', 'member_id')->withTimestamps();
    }
}
