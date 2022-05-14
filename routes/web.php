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

Route::get('/',[HomeController::class,'index'])->name(name:'home');

Route::get('/test',[HomeController::class,'test'])->name(name:'test');

Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name(name:'param');

Route::post('/save',[HomeController::class,'save'])->name(name:'save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ***************** ADMİN PANEL ROUTES **************
Route::prefix('admin')->group(function () {

    Route::get('/',[AdminHomeController::class,'index'])->name(name:'admin');
    // ***************** ADMİN CATEGORY ROUTES **************
    Route::get('/category',[AdminCategoryController::class,'index'])->name(name:'admin_category');
    Route::get('/category/create',[AdminCategoryController::class,'create'])->name(name:'admin_category_create');
    Route::post('/category/store',[AdminCategoryController::class,'store'])->name(name:'admin_category_store');
    Route::get('/category/edit/{id}',[AdminCategoryController::class,'edit'])->name(name:'admin_category_edit');
    Route::post('/category/update/{id}',[AdminCategoryController::class,'update'])->name(name:'admin_category_update');
    Route::get('/category/destroy/{id}',[AdminCategoryController::class,'destroy'])->name(name:'admin_category_destroy');
    Route::get('/category/show/{id}',[AdminCategoryController::class,'show'])->name(name:'admin_category_show');

});
