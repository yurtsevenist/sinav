<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lend extends Model
{
    use HasFactory;
    protected $guarded = [];
    function getUser()
    {
        return $this->hasOne('App\Models\User','id','uid');
    }
    function getBook()
    {
        return $this->hasOne('App\Models\Book','id','bid');
    }
}
