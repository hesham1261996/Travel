<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminBookingsController;
use App\Http\Controllers\AdminTourController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MytoursController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use App\Models\Tour;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/' , function(){
    return redirect()->route('tours.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

// admins
Route::resource('/admins/tours' , AdminTourController::class)->middleware('auth');
Route::resource("/admins/bookings", AdminBookingsController::class)->middleware('auth');
Route::resource('/admins/users' , UserController::class)->middleware('auth');
Route::resource('/admins/comments' , CommentController::class)->middleware('auth');;
Route::resource('/admins/blogs', AdminBlogController::class)->middleware('auth');
// user
Route::resource('/tours' , TourController::class);
Route::resource('/tour/{tour}/booking' , BookingController::class);
Route::resource('/blogs' , BlogController::class);

Route::get('/alltours' , function(){
    $tours = Tour::orderBy('id' , 'DESC')->simplePaginate(15);
    return view('alltours' , compact('tours')) ; 
});
// my tours
Route::get('/my_tours' , [MytoursController::class , 'mytours']);
Route::PATCH('/user_booking/{tour}/edit' , [MytoursController::class , 'update']);

//about  
Route::get('/about' , function(){
    return view('about') ;
});
// comments
Route::post('/tour/{tour}/user/{user}' ,[ CommentController::class , 'store']);


