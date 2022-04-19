<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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
Route::get('/admin',[AdminHomeController::class,'index'])->name(name:'admin');
