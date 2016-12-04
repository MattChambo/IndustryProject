<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chapters extends Model
{
    public function comments()
    {
        return $this->hasMany('App\Comments', 'chapter_id');
    }
}
