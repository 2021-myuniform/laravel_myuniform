<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class usersFavoriteOutfit extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'summary', 'user_id', 'likesCount'];

    public function comments() {
      return $this->hasMany('App\Comment');
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function likes()
    {
      return $this->hasMany('App\Models\Like');
    }

    public function like_by()
    {
      return Like::where('user_id', Auth::user()->id)->first();
    }
}
