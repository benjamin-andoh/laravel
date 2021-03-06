<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\TodoController;

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


Route::get('/home', function(){
	return view('home');
});

;
 
Route::get('/user', [UserController::class,'index']);
Route::post('/upload', [UserController::class,'uploadAvatar']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');;
Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos/create', [TodoController::class, 'store']);
Route::patch('/todos/{todo}/update', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);