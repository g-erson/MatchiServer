<?php

namespace App\Console\Commands;

use App\User;
use App\User_location;
use App\Matched_user;
use App\Blocked_user;
use Illuminate\Console\Command;

/*
 * The Matching algorithm 
 *
 * run with: php artisan matcher:run
 *
 * Feel free to create a namespace for any other classes 
 * you might need
 *
 * See laravel documentation for accessing the database 
 * with the Eloquent ORM
 */

class Matcher extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'matcher:run {user_from_id} {user_to_id}'; //command line args and name

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run the matching algorithm';

    /**
     * The drip e-mail service. --- 
     *
     * @var DripEmailer
     */
    protected $drip; // replace with relevant dependencies, if any

    /**
     * Create a new command instance.
     *
     * @param  DripEmailer  $drip
     * @return void
     */
    public function __construct(/*DripEmailer $drip*/) // replace with relevant dependencies, if any
    {
        parent::__construct();

//        $this->drip = $drip;  replace with relevant dependencies, if any
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userFromId = $this->argument('user_from_id');
        $userToId   = $this->argument('user_to_id'); //getting command line arguments
        $userFrom   = User::find($userFromId);  // database retrieval 
        $userTo     = User::find($userToId);
        $userFrom->match_with($userTo, 1);
    }
}
