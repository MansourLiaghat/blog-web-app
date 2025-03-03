<?php

namespace App\Http\Controllers\Socialight;

use App\Http\Controllers\Controller;
use App\Mail\welcomeFromSocial;
use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use function PHPUnit\Framework\isFalse;

class SocialLoginController extends Controller
{
    public function redirect($driver): RedirectResponse
    {
        return Socialite::driver($driver)->redirect();
    }

    public function callback($driver): RedirectResponse
    {
        $user = Socialite::driver($driver)->user();

        $isUserExist = User::where('email' , $user->getEmail())->first();

        if($isUserExist){
            Auth::login($isUserExist);
            Session::regenerate();
            return redirect()->intended('/')->with('success', $user->getName() .'خوش آمدید');
        }else{
            $password = Str::password(8);
            $user = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'driver_name' => $driver,
                'driver_id' => $user->getId(),
                'password' => bcrypt($password)
            ]);

            Auth::login($user);
            Session::regenerate();
            return redirect()->intended('/')->with('success', $user->name .'خوش آمدید');
            Mail::to($user->getEmail())->send(new welcomeFromSocial(Auth::user(),$password));
        }
    }
}
