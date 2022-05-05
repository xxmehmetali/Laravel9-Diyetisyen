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
    //  It is redirected from controller because of transmitting data to the page.
    Route::get('contact.html', [\App\Http\Controllers\Admin\MessageController::class, 'createContactPage']);

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

    //  admin property
    Route::prefix('/property')->name('property.')->controller(\App\Http\Controllers\Admin\PropertyController::class)->group(function () {
        //  PAGES
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/getx','getx');
        /*
        Route::get('/gety', function (){
            $data = Setting::find(1);//->with('getProperties')->get();
            $data2=$data->getProperties;
            return $data2;
        });
        Route::get('/getx', function (){
            $data = \App\Models\Property::find(2)->getSetting;
            return $data;
        });
*/
        //  FUNCTIONS
        Route::post('/store','store')->name('store');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');

    });


    //  admin setting
    Route::prefix('/setting')->name('setting.')->controller(\App\Http\Controllers\Admin\SettingController::class)->group(function () {
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


    //  admin treatment
    Route::prefix('/treatment')->name('treatment.')->controller(\App\Http\Controllers\Admin\TreatmentController::class)->group(function () {
        //  PAGES
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');

        //  FUNCTIONS
        Route::post('/store','store')->name('store');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
        /*
        Route::get('/getcategory', function (){
            $data = \App\Models\Category::find(1);
            return $data->getTreatments;
        });
        */
    });


    //  admin message
    Route::prefix('/message')->name('message.')->controller(\App\Http\Controllers\Admin\MessageController::class)->group(function () {
        //  PAGES
        //  create / edit page has been deactivated.
        Route::get('/','index')->name('index');
        //Route::get('/create','create')->name('create');
        //Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');

        //  FUNCTIONS
        //  create / edit functions has been deactivated.
        Route::post('/store','store')->name('store');
        //Route::post('/update/{id}','update')->name('update');
        //Route::get('/delete/{id}','destroy')->name('destroy');

    });

    //  admin treatment image gallery // treatment sub images
    Route::prefix('/image')->name('image.')->controller(\App\Http\Controllers\Admin\ImageController::class)->group(function () {
        //  PAGES
        //  Images belong to related treatment are listed
        Route::get('/{treatmentId}','index')->name('index');
        //  Images will be created to the related treatment by treatmentId
        Route::get('/create/{treatmentId}','create')->name('create');

        //  FUNCTIONS
        //  Store function is run in terms of treatmentId
        Route::post('/store/{treatmentId}','store')->name('store');
        //  Update and delete functions run with imageId
        //  ImageId is enough to update and delete an image
        //  Is not necessary to have treatmentId
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}/{treatmentId}','destroy')->name('destroy');
    });

    //  ----------  END OF ADMIN PAGES  ----------
});
//  ************  ADMIN ENDS HERE  ************

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
