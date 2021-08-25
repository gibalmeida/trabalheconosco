<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\CandidatosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/profile', function () {
//     return Inertia::render('Profile');
// })->middleware(['auth', 'verified'])->name('profile');

// Candidatos
Route::get('candidatos')->name('candidatos')->uses('CandidatosController@index')->middleware('remember', 'auth');
Route::get('candidatos/create', [CandidatosController::class,'create'])->name('candidatos.create')->middleware(['auth', 'verified']);
Route::post('candidatos',[CandidatosController::class, 'store'])->name('candidatos.store')->middleware('auth');
Route::get('candidatos/{candidato}/edit',[CandidatosController::class, 'edit'])->name('candidatos.edit')->middleware('auth');
Route::put('candidatos/{candidato}',[CandidatosController::class, 'update'])->name('candidatos.update')->middleware('auth');


require __DIR__.'/auth.php';
