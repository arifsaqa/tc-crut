<?php

use App\Http\Controllers\dashboardAdmin;
use App\Http\Controllers\dashboardUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;

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
    return view('welcome');
});

/*auth*/

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [loginController::class, 'login'])->name('login.adminRegister');
Route::post('logout', [loginController::class, 'logout'])->name('logout');

Route::get('/register',[registerController::class, 'index'])->name('register')->middleware('guest');
Route::post('/registers',[registerController::class, 'adminRegister'])->name('register.adminRegister');

// tampilan

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin', [dashboardAdmin::class, 'index'])->name('admin')->middleware('auth');
Route::get('/user', [dashboardUser::class, 'index'])->name('user')->middleware('auth');

Route::get('/admin/users', function () {
    return view('admin.users');
});

Route::get('/contoh/templating', function () {
    return view('admin.contoh');
});
