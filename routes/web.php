<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerTypeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/index', [AdminController::class, 'index'])->name('admin.index');

// Customer Types Route
Route::get('customertypes', [CustomerTypeController::class, 'index'])->name('customertypes.index');
Route::get('customertypes/create', [CustomerTypeController::class, 'create'])->name('customertypes.create');
Route::post('customertypes', [CustomerTypeController::class, 'store'])->name('customertypes.store');
Route::get('customertypes/edit/{id}', [CustomerTypeController::class, 'edit'])->name('customertypes.edit');
Route::post('customertypes/{id}', [CustomerTypeController::class, 'update'])->name('customertypes.update');
Route::delete('customertypes/destroy/{id}', [CustomerTypeController::class, 'destroy'])->name('customertypes.destroy');
// Customer Types Route

// Customer Route
Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('customers/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
Route::post('customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('customers/destroy/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
// End Customer Route

require __DIR__.'/auth.php';
