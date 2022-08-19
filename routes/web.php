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

Route::get('/index', [ PersonagemController::class, 'index'])->name('personagem.index'); // 'name of function'

Route::get('/create', [ PersonagemController::class, 'create'])->name('personagem.create'); // 'name of function'

Route::post('/create', [ PersonagemController::class, 'store'])->name('personagem.store'); // 'name of function'

Route::get('/show/{id}', [ PersonagemController::class, 'show'])->name('personagem.show'); // 'name of function'

Route::get('/edit/{id}', [ PersonagemController::class, 'edit'])->name('personagem.edit'); // 'name of function'

Route::put('/edit/{id}}', [ PersonagemController::class, 'update'])->name('personagem.update'); // 'name of function'

Route::delete('/destroy/{id}}', [ PersonagemController::class, 'destroy'])->name('personagem.destroy'); // 'name of function'

#Route::get('/', [ PersonagemController::class, 'index'])->name('personagem.index');

Route::get('/', function () {
    return view('guanabara');
});
