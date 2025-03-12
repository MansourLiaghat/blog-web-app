<?php

namespace App\Providers;

use App\Events\userSubscribe;
use App\Listeners\SendSubscribeMail;
use App\Listeners\SendWelcomeMail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::macro('images',function (string $image) {
            return Vite::asset("resources/assets/images/{$image}");
        });
//        Event::listen(UserSubscribe::class,SendSubscribeMail::class);
//        Event::listen(Registered::class,SendWelcomeMail::class);
    }
}
