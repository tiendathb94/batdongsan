<?php

namespace App\Http\Controllers;

use Validator,Redirect,Response,File;
use Socialite;
use App\User;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        $getInfo = Socialite::driver($provider)->user(); 
        $user = $this->createUser($getInfo,$provider); 
        auth()->login($user); 
        return redirect()->route('home');
    }
    function createUser($getInfo,$provider){
        $user = User::where('email', $getInfo->email)->first();
        if (!$user) {
            $user = User::create([
                'fullname'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}
