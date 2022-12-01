<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("usuarios", [App\Http\Controllers\UsuariosController::class, 'searchQuestions']);

Route::get("/listquestion", [App\Http\Controllers\UsuariosController::class, 'searchQuestions']);

Route::get("/respostadousuario", [App\Http\Controllers\UsuariosController::class, 'searchQuestions']);

Route::get("/newQuestions", [App\Http\Controllers\UsuariosController::class, 'newQuestions']);

Route::get('/response{id}', [App\Http\Controllers\UsuariosController::class, 'searchAnswers']);

Route::post('usuarios/createquestions',[App\Http\Controllers\UsuariosController::class, 'createQuestions']);

Route::get('/createresponse{id}', [App\Http\Controllers\UsuariosController::class, 'newResponse' ]);

Route::post('/createresponse/confirm', [App\Http\Controllers\UsuariosController::class, 'createResponse']);