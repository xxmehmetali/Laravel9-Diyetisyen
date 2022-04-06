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

//  ----------  HOMEPAGE  ----------
    Route::get('/', function () {
        return view('home.index');
    });
    Route::get('/index.html', function () {
        return view('home.index');
    });
//  ************  END OF HOMEPAGE   ************


//  ----------  ABOUT  ----------
    Route::get('/about.html', function () {
        return view('home.about');
    });
//  ************  END OF ABOUT  ************


//  ----------  SERVICE  ----------
Route::get('/service.html', function () {
    return view('home.service');
});
//  ************  END OF SERVICE  ************


//  ----------  PRICES  ----------
Route::get('/prices.html', function () {
    return view('home.prices');
});
//  ************  END OF PRICES  ************


//  ----------  LOCATION  ----------
Route::get('/location.html', function () {
    return view('home.location');
});
//  ************  END OF LOCATION  ************


//  ----------  CONTACT  ----------
Route::get('/contact.html', function () {
    return view('home.contact');
});
//  ************  END OF CONTACT  ************

//  ----------  BLOG  ----------
Route::get('/blog.html', function () {
    return view('home.blog');
});
//  ************  END OF BLOG  ************

//  ----------  BOOKING ----------
Route::get('/booking.html', function () {
    return view('home.booking');
});
//  ************  END OF BOOKING ************

//  ----------  TEAM ----------
Route::get('/team.html', function () {
    return view('home.team');
});
//  ************  END OF TEAM ************

Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
