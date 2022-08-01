<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProfileController;

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
    Route::resource('profile', ProfileController::class);
    Route::resource('team', TeamsController::class);
    Route::post('/addusertheme/{team}',[TeamsController::class,'addUserTheme'])->name('addUserTheme');
    Route::resource('team.task', TaskController::class);
    Route::resource('team.category', CategoryController::class);
    Route::resource('task.comment', CommentController::class);
    Route::resource('task.checklist', ChecklistController::class);
    Route::get('/homepage', [HomePageController::class, 'index'])->name('homepage');


});

require __DIR__.'/auth.php';
