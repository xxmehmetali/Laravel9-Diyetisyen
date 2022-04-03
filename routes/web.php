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
//  ----------  END OF HOMEPAGE   ----------


//  ----------  ABOUT  ----------
    Route::get('/about.html', function () {
        return view('home.about');
    });
//  ----------  END OF ABOUT  ----------

//  ----------  ABOUT  ----------
/*
Route::get('/service.html', function () {
    return view('home.about' , ['name' => 'service']);
});
*/
Route::get('/service.html', function () {
    return view('home.service');
});
//  ----------  END OF ABOUT  ----------




Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('adminhome');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
