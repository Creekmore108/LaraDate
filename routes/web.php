<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
// use Livewire\Attributes\Session;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/language/{locale}', function($locale){
    if(array_key_exists($locale,config('localization.locales'))){
        // dd($locale);
        app()->setlocale($locale);
         Session::put('locale', $locale);
        //  dd(session());
    }
    return redirect()->back();
})->name('locale');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
