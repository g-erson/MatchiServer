<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matched_user extends Model
{

    /*
     * one to many relationship between user and token key
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
