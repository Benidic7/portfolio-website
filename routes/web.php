<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function(){
    return view('portfolio.home');
})->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin');
Route::get('/download-cv', [HomeController::class, 'downloadCV'])->name('download.cv');

Route::prefix('admin')->group(function(){
    Route::get('/home', [HomeController::class, 'home'])->name('admin.home');
    Route::get('/about', [AboutController::class, 'about'])->name('admin.about');
    Route::get('/contact', [ContactController::class, 'contact'])->name('admin.contact');
    Route::get('/resume', [ResumeController::class, 'resume'])->name('admin.resume');
});
