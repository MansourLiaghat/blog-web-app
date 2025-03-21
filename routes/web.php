<?php

use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Socialight\SocialLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
})->name('front.index');




Route::group(['prefix' => '/dashboard'],function (){
    Route::get('/',function (){
        return view('dashboard.index');
    })->name('dashboard.index');

    Route::get('/create',function (){
       return view('dashboard.newsCreate');
    })->name('news.create');

    Route::get('/list',function (){
        return view('dashboard.newsList');
    })->name('news.list');

    Route::get('/edit',function (){
        return view('dashboard.newsEdit');
    })->name('news.edit');

    Route::get('/addCategory',function (){
        return view('dashboard.addCategories');
    })->name('add.category');

    Route::get('/comments',function (){
        return view('dashboard.manageComments');
    })->name('comments');

    Route::get('/users',function (){
        return view('dashboard.manageUsers');
    })->name('users');
});


## Route Auth
Route::view('/register','authentication.register')->name('register');
Route::Post('/register',[AuthenticationController::class,'create']);
Route::view('/login','authentication.login')->name('login');
Route::POST('/login',[AuthenticationController::class,'login'])->name('loginP');
Route::get('/logout',[AuthenticationController::class,'logout'])->name('logout');


## Socialight Route
Route::get('/auth/{driver}/redirect' , [SocialLoginController::class,'redirect'])->name('auth.redirect');
Route::get('/auth/{driver}/callback' , [SocialLoginController::class,'callback'])->name('auth.callback');




//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

//require __DIR__.'/auth.php';
