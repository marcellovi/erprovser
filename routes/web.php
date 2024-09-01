<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SettingsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/quemsomos', [AboutController::class, 'index'])->name('about');
Route::get('/servicos', [ServiceController::class, 'index'])->name('services');
Route::get('/contato', [HomeController::class, 'contact'])->name('contato');

Route::get('/trabalheconosco', function () {
    //return view('default');
    return view('apply');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/new-admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/new-settings', [SettingsController::class, 'index'])->name('admin.settings');

});

require __DIR__.'/auth.php';
