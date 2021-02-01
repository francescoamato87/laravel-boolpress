<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    // DB RELATIONS

    // post - users
    public function user() {
        return $this->belongsTo('App\User');
    }
}

