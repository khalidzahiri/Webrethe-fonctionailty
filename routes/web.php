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

Route::get('/',[ModuleController::class, 'index']);
Route::get('/modules/{id}',[ModuleController::class, 'show'])->whereNumber('id')->name('module.show');
Route::get('/ajout-de-module',[ModuleController::class, 'ajout']);
