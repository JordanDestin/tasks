<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamsController;
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
   
    Route::resource('tasks', TaskController::class);
    Route::resource('team', TeamsController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('task.checklist', ChecklistController::class);
    Route::get('/dashboard', [DasboardController::class, 'index'])->name('dashboard');

    /* Catégorie */
  /*  Route::get('/categogry', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/categogry/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/categogry', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/categogry/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('/categogry/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/categogry/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/categogry/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');*/
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('tasks', TaskController::class)->middleware('auth');
*/
require __DIR__.'/auth.php';
