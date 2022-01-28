<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Itcube42EnterController;
use App\Http\Controllers\Kvantum42EnterController;
use App\Http\Controllers\BlogController;

use App\Http\Livewire\Tapes;

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


// ITCube42 domain routing
//Route::domain('itcube42.ru')->group(function () {
    Route::get('/', \App\Http\Controllers\Itcube42EnterController::class);
    Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('index');
    Route::get('/blog/search/', [\App\Http\Controllers\BlogController::class, 'search'])->name('search');
    Route::get('/blog/{tape}', [\App\Http\Controllers\BlogController::class, 'show'])->name('show');
    //Route::resource('/comments', \App\Http\Controllers\CommentController::class);
    Route::get('/enrollment', [\App\Http\Controllers\EnrollmentController::class, 'index'])->name('enrollment');

//});

// Kvant42 domain routing
// Route::domain('kvantorium-nvkz.ru')->group(function () {
//     Route::get('/', \App\Http\Controllers\Kvantum42EnterController::class);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);
    Route::resource('users', \App\Http\Controllers\UsersController::class);
    Route::resource('staffs', \App\Http\Controllers\StaffController::class);
    Route::resource('tapes', \App\Http\Controllers\TapeController::class);
    Route::resource('comments', \App\Http\Controllers\CommentController::class);
    //Route::resource('timetables', \App\Http\Controllers\TimetableController::class);
    Route::resource('students', \App\Http\Controllers\StudentController::class);
    Route::get('changeStatus', [\App\Http\Controllers\CommentController::class, 'changeStatus']);

    // Clear cache website
    Route::get('/clear-cache', function() {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });
});

//Route::get('tapes', Tapes::class);
