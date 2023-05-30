<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function Detail(){
        return $this->hasOne(Detail::class);
    }

    public function Readtime(){
        return $this->belongsTo(Readtime::class);
    }
}
