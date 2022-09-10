<?php

use App\Http\Controllers\ModuleController;
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

Route::get('/',[ModuleController::class, 'index'])->name('welcome');
Route::post('/modules/create',[ModuleController::class, 'create'])->name('module.create');
Route::get('/modules/create',[ModuleController::class, 'store'])->name('module.store');
Route::get('/modules/{id}',[ModuleController::class, 'show'])->name('module.show');
