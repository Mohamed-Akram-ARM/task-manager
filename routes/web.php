<?php
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\DashboardController;
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
Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/',[AuthController::class,'showLogin'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/admin/dashboard', function(){
    return "Welcome Admin Dashboard";
})->middleware('auth');

Route::get('/user/dashboard', function(){
    return "Welcome User Dashboard";
})->middleware('auth');


Route::get('index', [TaskController::class,'index'])->name('index');
Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::resource('task',TaskController::class);

Route::get('/admin/dashboard', [DashboardController::class, 'create'])->name('create');
Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('adminDashboard');
Route::get('/edit/{id}', [TaskController::class, 'edit'])->middleware('auth');
Route::get('/task/edit/{id}', [TaskController::class,'edit'])->middleware('auth');

Route::get('user', [DashboardController::class,'user'])->name('user');
Route::get('show', [TaskController::class,'show'])->name('show');
