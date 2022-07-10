<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\DasboardController;

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
    return view('auth.login');
});


Route::group(['middleware' =>['auth']], function(){
   
    //Route::resource('task', TaskController::class);  
    Route::resource('team', TeamsController::class);
  

    Route::resource('team.task', TaskController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('task.comment', CommentController::class);
    Route::resource('task.checklist', ChecklistController::class);
    Route::get('/dashboard', [DasboardController::class, 'index'])->name('dashboard');


});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('tasks', TaskController::class)->middleware('auth');
*/
require __DIR__.'/auth.php';
