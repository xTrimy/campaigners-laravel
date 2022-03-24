<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\portal\MemberController;
use App\Http\Controllers\TraineeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');
Route::get('/login', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::prefix('/portal')->middleware('auth')->as('leaf.')->group(function(){
    Route::get('/', function () {
        
        return view('portal.index');
    })->name('home');

    Route::prefix('/members')->as('members.')->group(function () {
        Route::get('/add', [MemberController::class, 'add'])->name('add');
        Route::post('/add', [MemberController::class, 'add_action']);
        Route::get('/view', [MemberController::class, 'view'])->name('view');
    });

    Route::prefix('/trainees')->as('trainees.')->group(function () {
        Route::get('/attendance', [TraineeController::class, 'add_attendance'])->name('add_attendance');
        Route::post('/attendance', [TraineeController::class, 'store_attendance']);
        Route::get('/attendance/view', [TraineeController::class, 'view_attendance'])->name('view_attendance');

    });


    Route::get('/profile', function () {
        return view('portal.profile');
    })->name('profile');

    Route::get('/buttons', function () {
        return view('portal.buttons');
    })->name('buttons');
    Route::get('/cards', function () {
        return view('portal.cards');
    })->name('cards');
    Route::get('/charts', function () {
        return view('portal.charts');
    })->name('charts');
    Route::get('/forms', function () {
        return view('portal.forms');
    })->name('forms');
    Route::get('/modals', function () {
        return view('portal.modals');
    })->name('modals');
    Route::get('/tables', function () {
        return view('portal.tables');
    })->name('tables');
});

