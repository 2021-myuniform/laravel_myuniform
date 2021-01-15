<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    public function topsfavorites()
    {
        return $this->belongsToMany(Tops::class, 'topsfavorites', 'member_id', 'tops_id')->withTimestamps();
    }


    // これサンプルの映画に対するいいね！だけの場合は1回だけfavorite/unfavorite/is_favorite
    // やればよかったけど今回だとtops, pants, shoesでこのパターンが必要になりますよ
    public function topsfavorite($topsId)
    {
        $exist = $this->is_topsfavorite($topsId);

        if ($exist) {
            return false;
        } else {
            $this->topsfavorites()->attach($topsId);
            return true;
        }
    }

    public function topsunfavorite($topsId)
    {
        $exist = $this->is_topsfavorite($topsId);

        if ($exist) {
            $this->topsfavorites()->detach($topsId);
            return true;
        } else {
            return false;
        }
    }

    public function is_topsfavorite($topsId)
    {
        return $this->topsfavorites()->where('tops_id', $topsId)->exists();
    }

    // こっからパンツのfavorite
    public function pantsfavorites()
    {
        return $this->belongsToMany(Pants::class, 'pantsfavorites', 'member_id', 'pants_id')->withTimestamps();
    }

    public function pantsfavorite($pantsId)
    {
        $exist = $this->is_pantsfavorite($pantsId);

        if ($exist) {
            return false;
        } else {
            $this->pantsfavorites()->attach($pantsId);
            return true;
        }
    }

    public function unpantsfavorite($pantsId)
    {
        $exist = $this->is_pantsfavorite($pantsId);

        if ($exist) {
            $this->pantsfavorites()->detach($pantsId);
            return true;
        } else {
            return false;
        }
    }

    public function is_pantsfavorite($pantsId)
    {
        return $this->pantsfavorites()->where('pants_id', $pantsId)->exists();
    }


    // こっからシューズのfavorite
    public function shoesfavorites()
    {
        return $this->belongsToMany(Shoes::class, 'shoesfavorites', 'member_id', 'shoes_id')->withTimestamps();
    }

    public function shoesfavorite($shoesId)
    {
        $exist = $this->is_shoesfavorite($shoesId);

        if ($exist) {
            return false;
        } else {
            $this->shoesfavorites()->attach($shoesId);
            return true;
        }
    }

    public function unshoesfavorite($shoesId)
    {
        $exist = $this->is_shoesfavorite($shoesId);

        if ($exist) {
            $this->shoesfavorites()->detach($shoesId);
            return true;
        } else {
            return false;
        }
    }

    public function is_shoesfavorite($shoesId)
    {
        return $this->shoesfavorites()->where('shoes_id', $shoesId)->exists();
    }




    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
