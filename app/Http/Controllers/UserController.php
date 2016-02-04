<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function createUser(Request $request)
    {
       $name = $request->json('username');
       $pass = $request->json('password');
       return $name . " " . $pass;
    }
}
