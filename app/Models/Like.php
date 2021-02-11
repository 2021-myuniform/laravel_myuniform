<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;


class Like extends Model
{
    use HasFactory;

    use CounterCache;

    public $counterCacheOptions = [
        'Post' => [
            'field' => 'likesCount',
            'foreignKey' => 'post_id'
        ]
    ];

    protected $fillable = ['user_id', 'post_id'];

    public function Post()
    {
      return $this->belongsTo('App\Models\usersFavoriteOutfit');
    }

    public function User()
    {
      return $this->belongsTo(User::class);
    }
}
