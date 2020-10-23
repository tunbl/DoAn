<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;
class SocialController extends Controller
{
    public function redirectProiver($social){
    	return Socialite::driver($social)->redirect();
    }
    public function handleProviderCallback($social){
    	$user = Socialite::driver($social)->user();
    	$authUser = $this->FindOrCreateUser($user,$social);
    	Auth::login($authUser);
    	return redirect('/');
    }
    public function FindOrCreateUser($user,$social){
    	$authUser = User::where('provider_id', $user->id)->first();
    	if($authUser){
    		return $authUser;
    	}else{
    		return User::create([
    			'name'=> $user->name,
    			'email'=> $user->email,
    			'password'=> '',
    			'provider'=> $social,
    			'provider_id'=> $user->id,
    			'role'=> 0,
    			'phone'=> '',
    			'address'=> '',
    		]);
    	}
    }
}
