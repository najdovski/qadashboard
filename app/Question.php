<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /* One question can have many answers */
    public function answer(){
        return $this->hasMany('App\Answer');
    }

    /* One question can have only one category */
    public function category(){
        return $this->belongsTo('App\Category');
    }

    /* One question can have only one author (user) */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
