<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\ShiftController;

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

Route::get('/', [FrontController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/employes', [EmployesController::class, 'index'])->name('employes');
Route::get('/shift', [ShiftController::class, 'index'])->name('shift');
Route::get('/shift/tambah', [ShiftController::class, 'tambah']);
Route::post('/shift/insert', [ShiftController::class, 'insert'])->name('insert');
Route::get('/shift/delete/{any}', [ShiftController::class, 'delete']);
