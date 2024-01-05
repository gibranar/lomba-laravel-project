<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForgotPasswordController;
use PHPUnit\Framework\Attributes\Group;

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
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/forgot', function () {
    return view('auth.forgot');
})->name('forgot');

Route::get('/reset/{token}', function ($token) {
    return view('auth.reset', ['token' => $token]);
})->name('forgot.password');

Route::get('/index', function () {
    return view('users.dashboard');
})->name('index');

Route::controller(ForgotPasswordController::class)->group(function () {
    Route::get('/forgotPassword', 'showForm')->name('forgot.password');
    Route::post('/forgotPassword', 'sendEmail')->name('forgot.password.send');
    Route::post('/reset', 'reset')->name('reset.password');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'postLogin')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/register', 'store')->name('users.store');
});

Route::get('/index', function () {
    return view('users.dashboard');
})->name('index')->middleware('auth');
