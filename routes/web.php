<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Itcube42EnterController;
use App\Http\Controllers\Kvantum42EnterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactUsFormController;

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

// user protected routes
//Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
//    Route::get('/', 'HomeController@index')->name('user_dashboard');
//    Route::get('/list', 'UserController@list')->name('user_list');
//});
//
//// admin protected routes
//Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
//    Route::get('/', 'HomeController@index')->name('global_dashboard');
//    Route::get('/users', 'AdminUserController@list')->name('admin_users');
//});


// ITCube42 domain routing
//Route::domain('itcube42.ru')->group(function () {
    Route::get('/', \App\Http\Controllers\Itcube42EnterController::class);
    Route::get('/news', [\App\Http\Controllers\BlogController::class, 'index'])->name('index');
    //Route::get('/blog/search/', [\App\Http\Controllers\BlogController::class, 'search'])->name('search');
    //Route::get('/blog/{tape}', [\App\Http\Controllers\BlogController::class, 'show'])->name('show');
    Route::get('/news/{slug}', [\App\Http\Controllers\BlogController::class, 'show'])->where('slug', '[A-Za-z0-9_\-]+');
    //Route::resource('/comments', \App\Http\Controllers\CommentController::class);
    Route::get('/enrollment', [\App\Http\Controllers\EnrollmentController::class, 'index'])->name('enrollment');
    //Route::get('/apply', [\App\Http\Controllers\StudentController::class, 'create'])->name('create');
    //Route::get('/enrollment/status', [\App\Http\Controllers\EnrollmentController::class, 'status'])->name('enrollment');

//});

// Kvant42 domain routing
// Route::domain('kvantorium-nvkz.ru')->group(function () {
//     Route::get('/', \App\Http\Controllers\Kvantum42EnterController::class);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth', 'global_admin_access'], function () {
    //Route::resource('tasks', \App\Http\Controllers\TasksController::class);
    Route::resource('users', \App\Http\Controllers\UsersController::class);
    //Route::resource('staffs', \App\Http\Controllers\StaffController::class);
    Route::resource('tapes', \App\Http\Controllers\TapeController::class);
    Route::resource('comments', \App\Http\Controllers\CommentController::class);
    Route::resource('timetables', \App\Http\Controllers\TimetableController::class);
    Route::resource('teachers', \App\Http\Controllers\TeacherController::class);
    Route::resource('arrows', \App\Http\Controllers\ArrowController::class);
    Route::resource('documents', \App\Http\Controllers\DocumentController::class);
    Route::resource('settings', \App\Http\Controllers\SettingController::class);
    Route::resource('students', \App\Http\Controllers\StudentController::class);
    //Route::get('changeStatus', [\App\Http\Controllers\CommentController::class, 'changeStatus']);

    //Route::get('enrollment', [\App\Http\Controllers\EnrollmentController::class, 'index'])->name('index');

    // Clear cache website
//    Route::get('/clear-cache', function() {
//        Artisan::call('cache:clear');
//        return "Cache is cleared";
//    });
});

//Route::get('/contact', [ContactUsFormController::class, 'createForm']);
//Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

//Route::get('tapes', Tapes::class);
