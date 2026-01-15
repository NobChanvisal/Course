<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::resource('news', HomeController::class);

// Route::get('admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])
    ->prefix('admin')      // Adds 'admin/' to the URL
    ->name('admin.')       // Adds 'admin.' to the route name
    ->group(function () {

        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('dashboard'); // Final name: admin.dashboard

        Route::get('categories', [CategoriesController::class, 'index'])->name('categories'); // Final name: admin.categories
        Route::get('categories/{id}/edit', [CategoriesController::class, 'edit'])->name('categories.edit');
        Route::get('categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');

        Route::get('news', [NewsController::class, 'index'])->name('news');
        Route::get('news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');

    });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
