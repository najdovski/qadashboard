<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* One Category can have many questions */
    public function question(){
        return $this->hasMany('App\Question');
    }
}
