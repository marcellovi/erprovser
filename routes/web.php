<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/quemsomos', function () {
    //return view('default');
    return view('about');
});

Route::get('/servicos', function () {
    //return view('default');
    return view('services');
});

Route::get('/contato', function () {
    //return view('default');
    return view('contact');
});

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

});

require __DIR__.'/auth.php';
