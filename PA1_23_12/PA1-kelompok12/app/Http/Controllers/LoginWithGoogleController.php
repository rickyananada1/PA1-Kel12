<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\facades\Auth;
use Exception;
use Illuminate\Support\Facades\Redirect;

class LoginWithGoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect(); 
    }

    public function handleGoogleCallback()
{
    try {
        $user = Socialite::driver('google')->user(); // Perbaikan disini

        $finduser = User::where('google_id', $user->id)->first();

        if($finduser){

            Auth::login($finduser);

            return redirect()->intended('dashboard');
            
        } else {

            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
                'password' => encrypt('123456dummy')

            ]);

            Auth::login($newUser);
            return redirect()->intended('dashboard'); // Perbaikan disini       
        }
        
    }   catch(Exception $e){
        dd($e->getMessage());        
    } 
}

}