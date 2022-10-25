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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/questions', [App\Http\Controllers\QuestionController::class, 'index'])->name('question.list');
Route::get('/questions/create', [App\Http\Controllers\QuestionController::class, 'create'])->name('question.create');
Route::post('/questions/create', [App\Http\Controllers\QuestionController::class, 'save'])->name('question.save');
