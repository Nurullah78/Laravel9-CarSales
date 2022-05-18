<?php

use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name(name: 'home');

Route::get('/test', [HomeController::class, 'test'])->name(name: 'test');

Route::get('/param/{id}/{number}', [HomeController::class, 'param'])->name(name: 'param');

Route::post('/save', [HomeController::class, 'save'])->name(name: 'save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ***************** ADMİN PANEL ROUTES **************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name(name: 'index');
    // ***************** ADMİN CATEGORY ROUTES **************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name(name: 'index');
        Route::get('/create', 'create')->name(name: 'create');
        Route::post('/store', 'store')->name(name: 'store');
        Route::get('/edit/{id}', 'edit')->name(name: 'edit');
        Route::post('/update/{id}', 'update')->name(name: 'update');
        Route::get('/destroy/{id}', 'destroy')->name(name: 'destroy');
        Route::get('/show/{id}', 'show')->name(name: 'show');
    });
});
