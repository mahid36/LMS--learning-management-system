<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\FrontendCOntroller;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
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

//Level//

Route::post('store/level/',[CategoryController::class,'store_level'])->middleware(['auth', 'verified'])->name('store.level');
Route::get('delete/level/{id}',[CategoryController::class,'delete_level'])->middleware(['auth', 'verified'])->name('delete.level');

//create_course//

Route::get('create/course',[CreateCourseController::class,'create_course'])->middleware(['auth', 'verified'])->name('create.course');
Route::post('store/course',[CreateCourseController::class,'store_course'])->middleware(['auth', 'verified'])->name('store.course');
Route::get('course/list',[CreateCourseController::class,'course_list'])->middleware(['auth', 'verified'])->name('course.list');
Route::get('inventory',[CreateCourseController::class,'inventory'])->middleware(['auth', 'verified'])->name('inventory');

//tags//
Route::get('tags',[TagController::class,'tags'])->middleware(['auth', 'verified'])->name('tags');
Route::post('store/tags',[TagController::class,'store_tags'])->middleware(['auth', 'verified'])->name('store.tags');
Route::post('store/language',[TagController::class,'store_language'])->middleware(['auth', 'verified'])->name('store.language');
Route::get('delete/tags/{id}',[TagController::class,'delete_tags'])->middleware(['auth', 'verified'])->name('delete.tags');

//instructor//

Route::get('instructor',[InstructorController::class,'instructor'])->middleware(['auth', 'verified'])->name('instructor');
Route::post('store/instructor',[InstructorController::class,'store_instructor'])->middleware(['auth', 'verified'])->name('store.instructor');
Route::get('delete/instructor/{id}',[InstructorController::class,'delete_instructor'])->middleware(['auth', 'verified'])->name('delete.instructor');

//frontend pages//

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('sign/up',[CustomerController::class,'sign_up'])->middleware(['auth', 'verified'])->name('sign.up');
Route::get('sign/in',[CustomerController::class,'sign_in'])->middleware(['auth', 'verified'])->name('sign.in');


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
