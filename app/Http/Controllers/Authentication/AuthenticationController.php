<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Mail\WelcomeMail;
use App\Models\User;
use App\Rules\GoogleRecaptchaV3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;
use function Laravel\Prompts\password;

class AuthenticationController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->validate([
            "name" => ["required",],
            "email" => ["required", "unique:users", "email",],
            "password" => ["required", "confirmed", Password::min(8)->mixedCase()->letters()->numbers()
                ->symbols()],
            "password_confirmation" => ["required"],
//            "g-recaptcha-response" => ['required' , new GoogleRecaptchaV3('submitRegister')]
        ],
            ["name.required" => "نوشتن نام الزامی است",
                "email.required" => "نوشتن ایمیل الزامی است",
                "email.unique" => "ایمیل تکراری است",
                "email.email" => "ایمیل معتبر وارد کنید",
                "password.required" => "رمزعبور الزامی است",
                "password.min" => "حداقل رمز عبور باید 8 کارکتر باشد",
                "password.mix" => "رمزعبور باید شامل حرف بزرگ و کوچک و کارکتر و عدد باشد",
                "password_confirmation.required" => "تائید رمز عبور الزامی است"
            ]
        );

        $user = User::create($data);
        if ($user) {
            Auth::login($user);
            Mail::to($data['email'])->send(new WelcomeMail(Auth::user(), $request->password));
        } else {
            return redirect()->back()->with('error', 'فرآیند ثبت نام با خطا مواجه شد ، لطفا مجدد اقدام بفرمایید');
        }
        return redirect()->route('front.index')->with('success', Auth::user()->name . 'عزیز خوش آمدید');
    }


    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ],
            [
                "email.required" => "نوشتن ایمیل الزامی است",
                "email.email" => "ایمیل معتبر وارد کنید",
                "password.required" => "رمزعبور الزامی است",
            ]);


        if (Auth::attempt($credentials, remember: '')) {
            $request->session()->regenerate();

            return redirect()->route('front.index')->with('success', Auth::user()->name . 'خوش آمدید');

        } else {
            return redirect()->back()->with('error', 'نام کاربری و یا رمزعبور اشتباه است');
        }


    }
}

