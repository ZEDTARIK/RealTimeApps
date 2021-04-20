<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // RelationShip

    public function user() 
    {
        return $this->belongTo(User::class);
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    public function replies() 
    {
        return $this->hasMany(Reply::class);
    }
}
