<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Dashboard Users//
Route::get('/edit/profile',[UserController::class,'edit_profile'])->middleware(['auth', 'verified'])->name('edit.profile');
Route::post('/update/profile',[UserController::class,'update_profile'])->middleware(['auth', 'verified'])->name('update.profile');

// Category//
Route::get('add/category',[CategoryController::class,'add_category'])->middleware(['auth', 'verified'])->name('add.category');
Route::post('store/category',[CategoryController::class,'store_category'])->middleware(['auth', 'verified'])->name('store.category');
Route::get('delete/category/{id}',[CategoryController::class,'delete_category'])->middleware(['auth', 'verified'])->name('delete.category');
Route::post('store/level/',[CategoryController::class,'store_level'])->middleware(['auth', 'verified'])->name('store.level');
Route::get('delete/level/{id}',[CategoryController::class,'delete_level'])->middleware(['auth', 'verified'])->name('delete.level');
Route::get('create/course',[CreateCourseController::class,'create_course'])->middleware(['auth', 'verified'])->name('create.course');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
