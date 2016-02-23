<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matched_user extends Model
{

    protected $primaryKey = 'userid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userid',
        'blocked_userid'
    ];

    /*
     * one to many relationship between user and token key
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
