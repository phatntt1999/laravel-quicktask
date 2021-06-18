<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

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
//Route for task behavior
Route::get('/', [TasksController::class, 'index'])->name('index');

Route::post('/tasks', [TasksController::class, 'create'])->name('add-task');

Route::delete('/tasks/{task}', [TasksController::class, 'delete'])->name('del-task');

//Route for language changing
Route::group(['middleware' => 'locale'], function () {
    Route::get('lang/{language}', [HomeController::class, 'changeLanguage'])
        ->name('user-lang');
});
