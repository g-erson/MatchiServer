<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blocked_user extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = [
        'blocked_userid'
    ];

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
