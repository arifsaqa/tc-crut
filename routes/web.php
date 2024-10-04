<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboardAdminController;
use App\Http\Controllers\dashboardUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\manajemenUsersController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\SubjectController;

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

Route::get('/login', [AuthController::class, 'loginPage'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'registerPage'])->name('register')->middleware('guest');

Route::post('logout', [loginController::class, 'logout'])->name('logout');
Route::post('/log', [loginController::class, 'login'])->name('login.adminRegister');
Route::post('/registers', [registerController::class, 'adminRegister'])->name('register.adminRegister');

// tampilan

Route::get('/index', function () {
    return view('index');
});

Route::get('/admin', [dashboardAdminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/user', [dashboardUserController::class, 'index'])->name('user')->middleware('auth');

Route::get('/admin/users', [manajemenUsersController::class, 'index'])->name('manajemenUsers');
Route::post('/admin/user/add', [manajemenUsersController::class, 'addUser'])->name('manajemen.users.add');
Route::get('/admin/user/edit/{id}', [manajemenUsersController::class, 'editUser'])->name('manajemen.user.edit');
Route::put('/admin/user/update/{id}', [manajemenUsersController::class, 'updateUser'])->name('manajemen.user.update');


Route::get('/contoh/templating', function () {
    return view('admin.contoh');
});

Route::get('/admin/subject', [SubjectController::class, 'index'])->name('admin.subject');

Route::resource('subjects', SubjectController::class);
