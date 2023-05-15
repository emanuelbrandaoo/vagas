<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\CompanyController;

Route::get('/company/dashboard', [CompanyController::class, 'index'])->middleware('auth');
Route::get('/company/create', [CompanyController::class, 'create'])->middleware('auth');
Route::get('/company/show/{id}', [CompanyController::class, 'show']);
Route::post('/company/save', [CompanyController::class, 'store']);
Route::get('/company/delete/{id}', [CompanyController::class, 'destroy'])->middleware('auth');
Route::get('/company/clear', [CompanyController::class, 'clearTable'])->middleware('auth');
Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->middleware('auth');
Route::put('/company/update/{id}', [CompanyController::class, 'update'])->middleware('auth');

use App\Http\Controllers\UserController;

Route::get('/user/dashboard', [UserController::class, 'index'])->middleware('auth');
Route::get('/user/create', [UserController::class, 'create'])->middleware('auth');
Route::get('/user/show/{id}', [UserController::class, 'show']);
Route::post('/user/save', [UserController::class, 'store']);
Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->middleware('auth');
Route::get('/user/clear', [UserController::class, 'clearTable'])->middleware('auth');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/user/update/{id}', [UserController::class, 'update'])->middleware('auth');

use App\Http\Controllers\CategoryController;

Route::get('/category/dashboard', [CategoryController::class, 'index'])->middleware('auth');
Route::get('/category/create', [CategoryController::class, 'create'])->middleware('auth');
Route::get('/category/show/{id}', [CategoryController::class, 'show']);
Route::post('/category/save', [CategoryController::class, 'store']);
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->middleware('auth');
Route::get('/category/clear', [CategoryController::class, 'clearTable'])->middleware('auth');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->middleware('auth');
Route::put('/category/update/{id}', [CategoryController::class, 'update'])->middleware('auth');

use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);
