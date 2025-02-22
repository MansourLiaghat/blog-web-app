<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class GoogleRecaptchaV3 implements ValidationRule
{

    public function __construct(private ?string $action = null , private ?float $minScore = null)
    {

    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $siteVerify = Http::asForm()->post('https://www.google.com/recaptcha/api/siteVerify' , [
        "secrect"=> config('services.google_repactcha_v3.secret_key'),
        'responce'=> $value
            ]);


        $failMessage = [
            'failed' => 'ارتباط شما با سرویس احراز هویت گوگل قطع شده است ، لطفا مجددا اقدام بفرمایید',
            'success' => 'احراز هویت شما توسط سیستم امنیتی رد شد لطفا مجدد اقدام بفرمایید',
            'action' => 'درخواست شما با خطا مواجه شده است لطفا مجددا اقدام بفرمایید' ,
            'score' => 'امتیاز لازم را به دست نیاوردید لطفا مجددا اقدام بفرمایید'
        ];


        if($siteVerify->failed()){
            $fail($failMessage['failed']);
            return;
        }

        if($siteVerify->successful()){
            $body = $siteVerify->json();
            return;
        }

        if($siteVerify['success'] == 'false'){
            $fail($failMessage['success']);
            return;
        }

        if(!is_null($this->action) && $this->action !== $body['action']){
            $fail($failMessage['action']);
        }

        if(!is_null($this->minScore) && $this->minScore > $body['score']){
            $fail($failMessage['score']);
        }

    }
}
