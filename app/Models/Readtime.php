<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Readtime extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    public function Book(){
        return $this->hasMany(Book::class);
    }
}
