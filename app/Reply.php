<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    // RelationShip

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
 
    public function like()
    {
        return $this->hasMany(Like::class);
    }
}
