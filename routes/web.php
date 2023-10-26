<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagemController;

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

Route::get('/index', [ PersonagemController::class, 'index'])->name('personagens.index'); // 'name of function'

Route::get('/create', [ PersonagemController::class, 'create'])->name('personagens.create'); // 'name of function'

Route::post('/tercio', [ PersonagemController::class, 'store'])->name('personagens.store'); // 'name of function'

Route::get('/show/{id}', [ PersonagemController::class, 'show'])->name('personagens.show'); // 'name of function'

Route::get('/edit/{id}', [ PersonagemController::class, 'edit'])->name('personagens.edit'); // 'name of function'

Route::put('/edit/{id}', [ PersonagemController::class, 'update'])->name('personagens.update'); // 'name of function'

Route::delete('/destroy/{id}', [ PersonagemController::class, 'destroy'])->name('personagens.destroy'); // 'name of function'

Route::get('/', function () {
    return view('homepage');
});
