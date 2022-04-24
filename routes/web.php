<?php

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

//  ----------  FRONTSTORE PAGES  ----------
    //  Homepage
    Route::get('/', function () {
        return view('home.index');
    });
    Route::get('/index.html', function () {
        return view('home.index');
    });

    //  About
    Route::get('/about.html', function () {
        return view('home.about');
    });

    //  Service
    Route::get('/service.html', function () {
        return view('home.service');
    });

    //  Price
    Route::get('/prices.html', function () {
        return view('home.prices');
    });

    //  Location
    Route::get('/location.html', function () {
        return view('home.location');
    });

    //  Contact
    Route::get('/contact.html', function () {
        return view('home.contact');
    });

    //  Blog
    Route::get('/blog.html', function () {
        return view('home.blog');
    });

    //  Booking
    Route::get('/booking.html', function () {
        return view('home.booking');
    });

    //  Team
    Route::get('/team.html', function () {
        return view('home.team');
    });

    //  LogIn - Register
    Route::get('/login.html', function () {
        return view('home.logIn-Register');
    });

    //  Profile
    Route::get('/profile.html', function () {
        return view('home.profile');
    });

//  ----------  END OF FRONTSTORE PAGES  ----------





//  ************  ADMIN STARTS HERE  ************
//  ----------  ADMIN PAGES  ----------

//  admin : index / list page
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome');

//  admin faq
Route::get('/admin/faq',[\App\Http\Controllers\Admin\FaqController::class,'index'])->name('adminfaq');
Route::get('/admin/faq/create',[\App\Http\Controllers\Admin\FaqController::class,'create'])->name('adminFaqCreate');
Route::get('/admin/faq/edit/{id}',[\App\Http\Controllers\Admin\FaqController::class,'edit'])->name('adminFaqEdit');




//  ----------  END OF ADMIN PAGES  ----------

//  ----------  ADMIN FUNCTIONS  ----------

//  admin faq
Route::post('/admin/faq/store',[\App\Http\Controllers\Admin\FaqController::class,'store'])->name('adminFaqStore');
Route::post('/admin/faq/update/{id}',[\App\Http\Controllers\Admin\FaqController::class,'update'])->name('adminFaqUpdate');
Route::get('/admin/faq/destroy/{id}',[\App\Http\Controllers\Admin\FaqController::class,'store'])->name('adminFaqDestroy');


//  ----------  END OF ADMIN FUNCTIONS  ----------
//  ************  ADMIN ENDS HERE  ************

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
