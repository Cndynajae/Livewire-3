<?php

use App\Livewire\Users\Show;
use Illuminate\Support\Facades\Route;
use App\Livewire\Login;

Route::middleware('auth')->group(function ()
{
    Route::get('/', \App\Livewire\Home::class );
    Route::get('/about', \App\Livewire\About::class );
    Route::get('/contact', \App\Livewire\Contact::class );

    Route::get('/posts', \App\Livewire\Posts\Index::class);
    Route::get('users/{user}', \App\Livewire\Users\Show::class);
})

Route::get('/login', \App\Livewire\Login::class)->name('login')->middleware('guest');
