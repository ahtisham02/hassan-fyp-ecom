<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sbook extends Model
{
    use HasFactory;
    public function publishers()
    {
        return $this->hasMany(Publisher::class);
    }
}
