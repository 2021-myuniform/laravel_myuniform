<?php

// モデルの編集がまだ全然できておらんです

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

// class Favorite extends Model
// {
//     // まずここTopsのやーつ
//     use CounterCache;

//     public $counterCacheOptions = [
//         'Tops' => [
//             'field' => 'likes_count',
//             'foreignKey' => 'tops_id'
//         ]
//     ];

//     protected $fillable = ['member_id', 'tops_id'];

//     public function Tops()
//     {
//         return $this->belongsTo('App\Tops');
//     }

//     public function User()
//     {
//         return $this->belongsTo(User::class);
//     }


//     // さらにPantsやーつ

//     use CounterCache;

//     public $counterCacheOptions = [
//         'Pants' => [
//             'field' => 'likes_count',
//             'foreignKey' => 'pants_id'
//         ]
//     ];

//     protected $fillable = ['member_id', 'pants_id'];

//     public function Pants()
//     {
//         return $this->belongsTo('App\Pants');
//     }

//     public function User()
//     {
//         return $this->belongsTo(User::class);
//     }


//     // さらにShoesやーつ

//     use CounterCache;

//     public $counterCacheOptions = [
//         'Shoes' => [
//             'field' => 'likes_count',
//             'foreignKey' => 'shoes_id'
//         ]
//     ];

//     protected $fillable = ['member_id', 'shoes_id'];

//     public function Shoes()
//     {
//         return $this->belongsTo('App\Shoes');
//     }

//     public function User()
//     {
//         return $this->belongsTo(User::class);
//     }
// }

use Illuminate\Database\Eloquent\Factories\HasFactory;



class Favorite extends Model
{
    use HasFactory;
}
