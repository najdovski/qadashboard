<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{   
    /* A relationship between Answers and Question. This means that a single answer can belong to a single question */
    public function question(){
        return $this->belongsTo('App\Question');
    }

    /* A single answer can have only one author (user) */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
