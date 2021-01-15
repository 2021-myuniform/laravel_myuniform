<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pants_table extends Model
{
    use HasFactory;

    public function scopeNameEqual($query, $str)
    {
        return $query->where('color', $str);
    }

    public function scopePriceGreaterThan($query, $n)
    {
        return $query->where('price', '>=', $n);
    }

    public function scopePriceLessThan($query, $n)
    {
        return $query->where('price', '<=', $n);
    }

    public function scopeGetColor($query, $n)
    {
        return $query->where('color', '=', $n);
    }
}
