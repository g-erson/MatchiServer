<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'api_token',
    ];

    /*
     * one to one relationship between user and token key
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
