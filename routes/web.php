<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::Class, 'index'])->name('index');
Route::post('/', [StudentController::Class, 'create'])->name('create');
Route::get('/edit/{id}', [StudentController::Class, 'edit'])->name('edit');
Route::put('/edit/{id}', [StudentController::Class, 'update'])->name('update');
Route::get('/delete/{id}', [StudentController::Class, 'destroy'])->name('destroy');

