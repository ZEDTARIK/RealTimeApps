<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // RelationShip

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    // Fialabelle 
    protected $guarded  = [];
}
