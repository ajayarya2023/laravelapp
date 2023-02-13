<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Controller;

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
// Route::get('/about',function(){

//     return view('about');

// });

// Route::get('users/{name}',function($name100){
//     echo "$name100";
//     return view('test',['name100'=>$name100]);

// });

Route::get('test/{user}',[Controller::class,'test']);

// Route::get('/exit/{id}',[Controller::class,'show']);

// Route::get('/editform',function(){
//     return redirect("about");
// });


// Route::view('/about',"about");

// Route::get('/{name}',function($name){
//     echo $name;
//     return view('about');
// });

Route::get('/users',[Users::class,'index'])->name('users');
Route::get('/', [StudentController::Class, 'index'])->name('index');
Route::post('/', [StudentController::Class, 'create'])->name('create');
Route::get('/edit/{id}', [StudentController::Class, 'edit'])->name('edit');
Route::put('/edit/{id}', [StudentController::Class, 'update'])->name('update');
Route::get('/delete/{id}', [StudentController::Class, 'destroy'])->name('destroy');

