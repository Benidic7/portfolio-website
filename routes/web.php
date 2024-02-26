<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ExperienceController;

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

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::get('/resume', [PortfolioController::class, 'resume'])->name('resume');
Route::get('/download-cv', [PortfolioController::class, 'downloadCV'])->name('download.cv');

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('admin');

    Route::get('/home', [HomeController::class, 'home'])->name('admin.home');
    Route::get('home/create', [HomeController::class, 'create'])->name('home.create');
    Route::post('home/store', [HomeController::class, 'store'])->name('home.store');
    Route::get('home/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
    Route::put('/home/update/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::delete('/home/destroy/{id}', [HomeController::class, 'destroy'])->name('home.destroy');

    Route::resource('about', AboutController::class);

    Route::resource('contact', ContactController::class);

    Route::resource('resume', ResumeController::class);

    Route::resource('education', EducationController::class);

    Route::resource('experience', ExperienceController::class);
});
