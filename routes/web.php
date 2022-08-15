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

Route::get('/test', [ PersonagemController::class, 'test'])->name('personagem.test'); // 'name of function'

Route::get('/index', [ PersonagemController::class, 'index'])->name('personagem.index'); // 'name of function'

Route::get('/form', [ PersonagemController::class, 'create'])->name('personagem.create'); // 'name of function'

Route::post('/form', [ PersonagemController::class, 'store'])->name('personagem.store'); // 'name of function'

Route::get('/', function () {
    return view('welcome');
});
