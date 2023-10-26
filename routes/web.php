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
); // 'name of function'

asdasfsdggd

Route::get('/show/{id}', [ PersonagemController::class, 'show'])->name('personagens.show'); // 'name of function'

Route::get('/edit/{id}', [ PersonagemController::class, 'edit'])->name('personagens.edit'); // 'name of function'
sdafsfgsdfgh
asdfasdgsg
Route::put('/edit/{id}', [ PersonagemController::class, 'update'])->name('personagens.update'); // 'name of function'
emController::class, 'destroy'])->name('personagens.destroy'); // 'name of function'

Route::get('/', function () {
    return view('homepage');
});
