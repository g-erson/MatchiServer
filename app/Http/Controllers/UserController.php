<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\QueryException;

use App\User;
use App\Token;

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

    /*
     * FUNCTION createUser
     * METHOD POST
     *
     * Creates a new user in the database
     * @param request
     * @return response
     */
    public function createUser(Request $request)
    {
        if($request->isMethod('post'))
        {
            $user = new User;
            $errors = null;
            $user->firstname = $request->json('firstname');
            $user->lastname = $request->json('lastname');         
            $user->email = $request->json('email');
            $user->facebookid = $request->json('facebookid');
            if( $user->firstname === null || $user->lastname === null)
                $errors .= " no firstname or lastname supplied \n";
            if( $user->facebookid === null)
                $errors .= " no Facebook ID supplied \n";
            if( $errors === null)
            {
                try {
                    $user->save();
                }catch(QueryException $e){
                    //TODO check this is the correct error
                    return "Error, Facebook ID already in use ";
                }
            }
            else
                return "Error," . $errors;
            $user->token()->save($this->newToken());

            return json_encode(["userid" => $user->id,"AuthToken" => $user->token->api_token]); 
        }
        else
            return response('Invalid request',405)->header('Allow','POST');
    }

    /* 
     * FUNCTION renewToken
     * METHOD GET
     *
     * gets a new token, verifies user with facebooks graph api
     * @param request
     * @param userid
     * @param userToken (facebook api token)
     * @param appToken (facebook app token)
     * @return token
     */
    public function renewToken(Request $request, $userid, $userToken, $appToken)
    {
        //TODO
    }

    /*
     * FUNCTION updatePicture
     * METHOD PUT
     *
     * add new picture to database
     * @param request
     * @param userid
     * @return response
     */
    public function updatePicture(Request $request, $userid)
    {
        //TODO
    }

    /*
     * FUNCTION getUser
     * METHOD GET
     *
     * gets a user from the database
     * @param request
     * @param userid
     * @return User
     */
    public function getUser(Request $request, $userid)
    {
        if($request->isMethod('get'))
        {
            if(Gate::allows('getUser',$userid))
                return User::find($userid);
            else
                return response("Unauthorised. ", 401);
        }
        else
            return response('Invalid request',405)->header('Allow','GET');
    }

    /*
     * FUNCTION deleteUser
     * METHOD DELETE
     *
     * deletes a user from the database
     * @param request
     * @param userid
     * @return response
     */
    public function deleteUser(Request $request, $userid)
    {
        if(Gate::allows('deleteUser',$userid)){
            User::destroy($userid);
            return response(200);
        }
        else
            return response("Unauthorised.", 401);
    }

    /*
     * FUNCTION newToken
     *
     * creates a new token
     * @return Token
     */
    private function newToken()
    {
        $token = new Token;
        $api_token = md5(random_bytes(16));
        for($i = 0;$i < 7;$i++)
            $api_token .= md5(random_bytes(16));
        $token->api_token = $api_token;
        return $token;
    }
}
