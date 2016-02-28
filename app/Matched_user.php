<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matched_user extends Model
{

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'user_id',
        'facebookid',
        'email',
        'updated_at',
        'created_at'
    ];
    /*
     * one to many relationship between user and token key
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
