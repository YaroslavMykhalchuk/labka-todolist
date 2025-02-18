<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\Task4Controller;
use App\Http\Controllers\Task5Controller;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');

Route::get('/tasks4', [Task4Controller::class, 'index'])->name('tasks4.index');
Route::post('/tasks4', [Task4Controller::class, 'store'])->name('tasks4.store');
Route::post('/tasks4/{task}', [Task4Controller::class, 'updateStatus'])->name('tasks4.updateStatus');

Route::get('/tasks5', [Task5Controller::class, 'index'])->name('tasks5.index');
Route::post('/tasks5', [Task5Controller::class, 'store'])->name('tasks5.store');
Route::post('/tasks5/{task}', [Task5Controller::class, 'updateStatus'])->name('tasks5.updateStatus');