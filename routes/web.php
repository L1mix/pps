<?php

use App\Http\Controllers\BlankController;
use App\Http\Controllers\CathedraController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Gate;
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

Route::get('/', [LoginController::class,'checkLogin'])->name('login');

Route::post('/', [LoginController::class, 'login'])->name('/');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/registration', [RegistrController::class, 'index'])->name('registration');

Route::post('/registration',[RegistrController::class, 'save']);

Route::get('/blank', [BlankController::class,'show'])->middleware('auth')->name('blank');

Route::post('/blank',[BlankController::class,'save']);

Route::get('/table', [TableController::class,'index'])->middleware('auth')->name('table');

Route::get('/table/export',[TableController::class,'export'])->middleware('auth')->name('export');

Route::get('/table/exportCathedra',[CathedraController::class,'exportCathedra'])->middleware('auth')->name('exportCathedra');

Route::get('/table/exportDepartment',[DepartmentController::class,'exportDepartment'])->middleware('auth')->name('exportDepartment');



