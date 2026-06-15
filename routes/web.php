<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', function () {
//     return view('user');
// });

// Route::get('/product', function () {
//     return view('product');
// });
// Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
// Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show')->where('id', '[0-9]+');
// Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
// Route::get('/user/{username}/{email}', [App\Http\Controllers\UserController::class, 'showByUsername'])->name('user.showByUsername');
// //Product
// Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

//Customers
// Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
// Route::get('/customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
// Route::post('/customer', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
// Route::get('/customer/{id}/edit', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit')->where('id', '[0-9]+');
// Route::put('/customer/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update')->where('id', '[0-9]+');
// Route::delete('/customer/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy')->where('id', '[0-9]+');

//Student
Route::get('/student', [App\Http\Controllers\StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create'])->name('student.create');
Route::post('/student', [App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
Route::get('/student/{id}/edit', [App\Http\Controllers\StudentController::class, 'edit'])->name('student.edit')->where('id', '[0-9]+');
Route::put('/student/{id}', [App\Http\Controllers\StudentController::class, 'update'])->name('student.update')->where('id', '[0-9]+');
Route::delete('/student/{id}', [App\Http\Controllers\StudentController::class, 'destroy'])->name('student.destroy')->where('id', '[0-9]+');
//Movies
// Route::get('/movie', [App\Http\Controllers\MovieController::class, 'index'])->name('movie.index');
