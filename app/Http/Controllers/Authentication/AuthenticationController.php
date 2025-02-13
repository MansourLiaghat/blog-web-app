<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            "password_confirmation" => ["required"]
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
        Auth::login($user);
        return redirect()->route('front.index')->withErrors('successLogin', auth()->user()->name . 'سلاااااااااااااااااااااااااام');
    }
}
