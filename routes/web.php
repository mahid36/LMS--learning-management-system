<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CreateCourseController;
use App\Http\Controllers\FrontendCOntroller;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin/login', function(){
    return view('auth.login');
})->name('admin.login');

// Dashboard Users//
Route::get('/edit/profile',[UserController::class,'edit_profile'])->middleware(['auth', 'verified'])->name('edit.profile');
Route::post('/update/profile',[UserController::class,'update_profile'])->middleware(['auth', 'verified'])->name('update.profile');

// Category//
Route::get('add/category',[CategoryController::class,'add_category'])->middleware(['auth', 'verified'])->name('add.category');
Route::post('store/category',[CategoryController::class,'store_category'])->middleware(['auth', 'verified'])->name('store.category');
Route::get('delete/category/{id}',[CategoryController::class,'delete_category'])->middleware(['auth', 'verified'])->name('delete.category');
Route::get('sub/category',[CategoryController::class,'sub_category'])->middleware(['auth', 'verified'])->name('sub.category');
Route::post('store/subcategory',[CategoryController::class,'store_subcategory'])->middleware(['auth', 'verified'])->name('store.subcategory');
Route::get('delete/subcategory/{id}',[CategoryController::class,'delete_subcategory'])->middleware(['auth', 'verified'])->name('delete.subcategory');

//Level//
Route::post('store/level/',[CategoryController::class,'store_level'])->middleware(['auth', 'verified'])->name('store.level');
Route::get('delete/level/{id}',[CategoryController::class,'delete_level'])->middleware(['auth', 'verified'])->name('delete.level');

//create_course//
Route::get('create/course',[CreateCourseController::class,'create_course'])->middleware(['auth', 'verified'])->name('create.course');
Route::post('store/course',[CreateCourseController::class,'store_course'])->middleware(['auth', 'verified'])->name('store.course');
Route::get('course/list',[CreateCourseController::class,'course_list'])->middleware(['auth', 'verified'])->name('course.list');
Route::get('inventory',[CreateCourseController::class,'inventory'])->middleware(['auth', 'verified'])->name('inventory');
Route::get('delete/course/{id}',[CreateCourseController::class,'delete_course'])->middleware(['auth', 'verified'])->name('delete.course');

//tags//
Route::get('tags',[TagController::class,'tags'])->middleware(['auth', 'verified'])->name('tags');
Route::post('store/tags',[TagController::class,'store_tags'])->middleware(['auth', 'verified'])->name('store.tags');
Route::post('store/language',[TagController::class,'store_language'])->middleware(['auth', 'verified'])->name('store.language');
Route::get('delete/tags/{id}',[TagController::class,'delete_tags'])->middleware(['auth', 'verified'])->name('delete.tags');
Route::get('delete/language/{id}',[TagController::class,'delete_language'])->middleware(['auth', 'verified'])->name('delete.language');

//instructor//
Route::get('instructor',[InstructorController::class,'instructor'])->middleware(['auth', 'verified'])->name('instructor');
Route::post('store/instructor',[InstructorController::class,'store_instructor'])->middleware(['auth', 'verified'])->name('store.instructor');
Route::get('delete/instructor/{id}',[InstructorController::class,'delete_instructor'])->middleware(['auth', 'verified'])->name('delete.instructor');

//frontend pages//
Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('sign/up',[CustomerController::class,'sign_up'])->name('sign.up');
Route::get('sign/in',[CustomerController::class,'sign_in'])->name('sign.in');
Route::get('course/details{slug}',[FrontendCOntroller::class,'course_details'])->name('course.details');
Route::get('course',[FrontendController::class,'course'])->middleware(['auth:student', 'verified'])->name('course');

// Students//
Route::get('edit/profile',[StudentController::class,'edit_profile'])->middleware(['auth:student'])->name('edit.profile');
Route::post('update/profile',[StudentController::class,'update_profile'])->middleware(['auth:student'])->name('update.profile');
Route::get('student/dashboard',[StudentController::class,'student_dashboard'])->middleware(['auth:student'])->name('student.dashboard');
Route::post('store/signup',[StudentController::class,'store_signup'])->name('store.signup');
Route::post('log/in',[StudentController::class,'log_in'])->name('log.in');
Route::get('my/courses',[StudentController::class,'my_courses'])->middleware(['auth:student'])->name('my.courses');
Route::get('payment/info',[StudentController::class,'payment_info'])->middleware(['auth:student'])->name('payment.info');
Route::get('sign/out',[StudentController::class,'sign_out'])->middleware(['auth:student'])->name('sign.out');

//cart//
Route::post('add/cart',[CartController::class,'add_cart'])->middleware(['auth:student'])->name('add.cart');
Route::get('remove/cart/{id}',[CartController::class,'remove_cart'])->middleware(['auth:student'])->name('remove.cart');
Route::get('/cart',[CartController::class,'cart'])->middleware(['auth:student'])->name('cart');

//coupon//
Route::get('/coupon',[CouponController::class,'coupon'])->middleware(['auth', 'verified'])->name('coupon');
Route::post('/add/coupon',[CouponController::class,'add_coupon'])->middleware(['auth', 'verified'])->name('add.coupon');
Route::get('/delete/coupon/{id}',[CouponController::class,'delete_coupon'])->middleware(['auth', 'verified'])->name('delete.coupon');

//checkout//
Route::get('/checkout',[CheckoutController::class,'checkout'])->middleware(['auth:student'])->name('checkout');
Route::post('/getCity',[CheckoutController::class,'getCity'])->name('getCity');
Route::post('/confirm/checkout',[CheckoutController::class,'confirm_checkout'])->middleware(['auth:student'])->name('confirm.checkout');
Route::get('order/success/{id}',[CheckoutController::class,'order_success'])->middleware(['auth:student'])->name('order.success');

//Order//
Route::get('/orders',[OrderController::class,'orders'])->middleware(['auth', 'verified'])->name('orders');
Route::post('/order/status/{id}',[OrderController::class,'order_status'])->middleware(['auth', 'verified'])->name('order.status');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
