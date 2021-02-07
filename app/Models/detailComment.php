<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailComment extends Model
{
    use HasFactory;

    protected $table = "detailComments";
    protected $fillable = ["user_id", "detail_id", "comment", "userName", "img"];
}
