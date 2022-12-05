<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\Dashboard;
use App\Http\Livewire\User\Register;
use App\Http\Livewire\User\Login;
use App\Http\Livewire\Admin\Dashboard as AdminDashboard;
use App\Http\Livewire\Admin\Login  as AdminLogin;


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


//USER
Route::get('/', Register::class)->name('user.register');
Route::get('/login', Login::class)->name('user.login');
Route::get('/user/dashboard', Dashboard::class)->name('user.dashboard');

//ADMIN
Route::get('/admin/login', AdminLogin::class)->name('user.login');
Route::get('/admin/dashboard', AdminDashboard::class)->name('user.dashboard');


