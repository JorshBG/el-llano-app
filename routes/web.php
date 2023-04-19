<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Forms\SignIn;
use Illuminate\Http\Request;

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
    return redirect('signin');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/signin', function () {
    return view('pages.sign-in');
})->name('signin');

Route::get('/signup', function () {
    return view('pages.sign-up');
})->name('signup');

Route::controller(CategoryController::class)->prefix('categories')->group(function(){

    // Route::metodo('ruta', 'funcion que se ejecuta dentro de la clase del controlador');
    // La ruta ya viene con el prefijo añadido, es decir, si desde el cliente se hace una petición a /category/create,
    // en esta agrupación se añade el prefijo category para que solo tengas que añadir la ruta que desea controlar en este caso
    // la ruta es /create y la función es la función create del controlador CategoryController
    // Aqui se puede diseñar el crud, solo agrega las rutas correspondientes a las operaciones que se requieran
    Route::post('create', 'create');
    Route::get('get', 'select');

});

Route::controller(PresentationController::class)->prefix('presentation')->group(function(){

    Route::post('create', 'create');
    Route::get('get', 'select');

});

Route::controller(UserController::class)->prefix('user')->group(function(){

    Route::post('create', 'create');
    Route::post('get', 'select');

});



Route::fallback(function(){

    return response(view('pages.errors.404'), 404);

});


Route::post('/getCats', [CategoryController::class, 'create']);
