<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function authorDetail(){
        return $this->hasOne('App\AuthorDetail');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
