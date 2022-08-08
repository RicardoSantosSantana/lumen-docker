<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends BaseController
{

    public function redirectToProvider(){

    return  Socialite::driver('github')->stateless()->redirect();
    }

    public function handleProviderCallback(){

         $user =  Socialite::driver('github')->stateless()->user();

         $profile = [
            "id"=>$user->id,
            "nickname"=>$user->nickname,
            "name"=>$user->name,
            "email"=>$user->email,
            "avatar"=>$user->email
         ];

        return response()->json($profile);
    }
}




