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

    //  USER RELATED PAGES
    //-------------------------
    //  LogIn - Register
    Route::get('/login.html', function () {
        return view('home.logIn-Register');
    });

    //  Profile
    Route::get('/profile.html', function () {
        return view('home.profile');
    });

    //  Browse Dietitian
    Route::get('/browseDietitian.html', function () {
        return view('home.browseDietitian');
    });



//  ----------  END OF FRONTSTORE PAGES  ----------





//  ************  ADMIN STARTS HERE  ************
Route::prefix('admin')->name('admin.')->group(function () {
    //  ----------  ADMIN PAGES  ----------

    //  admin : index
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('index');

    //  admin faq
    Route::prefix('/faq')->name('faq.')->controller(\App\Http\Controllers\Admin\FaqController::class)->group(function () {
        //  PAGES
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');

        //  FUNCTIONS
        Route::post('/store','store')->name('store');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
    });


    //  admin category
    Route::prefix('/category')->name('category.')->controller(\App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        //  PAGES
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');

        //  FUNCTIONS
        Route::post('/store','store')->name('store');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
    });

    //  ----------  END OF ADMIN PAGES  ----------
});
//  ************  ADMIN ENDS HERE  ************

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
