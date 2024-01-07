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


// USERS ROUTE START
Route::get('/dashboard', function () {
    return view('users.dashboard');
})->name('users.dashboard')->middleware('auth');

Route::get('/pt', function () {
    return view('users.perguruan_tinggi');
})->name('users.pt')->middleware('auth');

Route::get('/profile', function () {
    return view('users.profile');
})->name('users.profile')->middleware('auth');

Route::get('/team', function () {
    return view('users.team');
})->name('users.team')->middleware('auth');
// USERS ROUTE END


Route::controller(ForgotPasswordController::class)->group(function () {
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
