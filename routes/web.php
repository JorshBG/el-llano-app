<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Forms\SignIn;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    route('signin');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/signin', function () {
    return view('pages.sign-in');
})->name('signin');

Route::get('/signup', function () {
    return view('livewire.forms.sign-up');
})->name('signup');

Route::fallback(function(){
    return view('pages.errors.404');
})->name('404');
