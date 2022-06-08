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
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get('/index.html', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

    //  About
    Route::get('/about.html', [\App\Http\Controllers\HomeController::class, 'about'])->name('home.about');

    //  Service
    Route::get('/service.html', [\App\Http\Controllers\HomeController::class, 'service'])->name('home.service');

    //  Price
    Route::get('/prices.html', [\App\Http\Controllers\HomeController::class, 'prices'])->name('home.prices');

    //  Location
    Route::get('/location.html', [\App\Http\Controllers\HomeController::class, 'location'])->name('home.location');

    //  Contact
    Route::get('contact.html', [\App\Http\Controllers\HomeController::class, 'contact']);

    //  Blog
    Route::get('/blog.html', [\App\Http\Controllers\HomeController::class, 'blog'])->name('home.blog');

    //  Booking
    Route::get('/booking.html', [\App\Http\Controllers\HomeController::class, 'booking'])->name('home.booking');

    //  Team
    Route::get('/team.html', [\App\Http\Controllers\HomeController::class, 'team'])->name('home.team');

    //  USER RELATED PAGES
    //-------------------------
    //  LogIn - Register
    Route::get('/login.html', [\App\Http\Controllers\HomeController::class, 'login'])->name('home.login');

    //  Profile
    Route::get('/profile.html', [\App\Http\Controllers\HomeController::class, 'profile'])->name('home.profile');

    //  Browse Dietitian
    Route::get('/browseDietitian.html', [\App\Http\Controllers\HomeController::class, 'browseDietitian'])->name('home.browseDietitian');

    //  Faq
    Route::get('/faq.html', [\App\Http\Controllers\HomeController::class, 'faq'])->name('home.faq');

    //  Treatment Detail Page
    Route::get('/treatmentDetailPage/{id}', [\App\Http\Controllers\HomeController::class, 'treatmentDetailPage'])->name('home.treatmentDetailPage');

    //  Treatment List Page
    Route::get('/category/{categoryId}', [\App\Http\Controllers\HomeController::class, 'treatmentListPage'])->name('home.treatmentListPage');

    //  Logout
    Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('home.logout');

    Route::post('/userProfileSave',[\App\Http\Controllers\UserController::class,'profileSave'])->name('user.profileSave');

    Route::get('/userPanel.html', [\App\Http\Controllers\UserController::class, 'userPanel'])->name('user.userPanel');

    Route::get('/myOrders/{user_id}', [\App\Http\Controllers\UserController::class, 'myOrders'])->name('home.myOrders');

    Route::get('/myReviews/{user_id}', [\App\Http\Controllers\UserController::class, 'myReviews'])->name('user.myReviews');

    Route::get('/onGoingPackets/{user_id}', [\App\Http\Controllers\UserController::class, 'onGoingPackets'])->name('user.onGoingPackets');

    Route::get('/addToCart/{user_id}/{treatment_id}', [\App\Http\Controllers\ShopCartController::class, 'addToCart'])->name('user.addToCart');

    Route::get('/removeFromCart/{user_id}/{treatment_id}', [\App\Http\Controllers\ShopCartController::class, 'removeFromCart'])->name('user.removeFromCart');

//  ----------  END OF FRONTSTORE PAGES  ----------

Route::post('/adminlogin.html',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('login');
Route::get('/adminlogin.html', function () {
    return view('admin.logIn-Register');
})->name('adminlogin');



//  ************  ADMIN STARTS HERE  ************
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    //  ----------  ADMIN PAGES  ----------

    //  admin : index
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('index');
    Route::post('/',[\App\Http\Controllers\Admin\HomeController::class,'index'])->name('index');

    //  admin : login / register
    //  this is for pages
//    Route::get('/login.html', function () {
//        return view('admin.logIn-Register');
//    });

    //  these are for the login and logout functions
    Route::post('/adminlogin.html',[\App\Http\Controllers\Admin\HomeController::class,'login'])->name('login');
    Route::post('/adminregister.html',[\App\Http\Controllers\Admin\HomeController::class,'register'])->name('register');

    //  admin : logout
    Route::get('/adminlogout.html',[\App\Http\Controllers\Admin\HomeController::class,'logout'])->name('logout');

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

    //  admin setting > property
    Route::prefix('/property')->name('property.')->controller(\App\Http\Controllers\Admin\PropertyController::class)->group(function () {
        //  PAGES
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/getx','getx');

        //  FUNCTIONS
        Route::post('/store','store')->name('store');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');

    });

    //  admin setting > socialMedia
    Route::prefix('/socialMedia')->name('socialMedia.')->controller(\App\Http\Controllers\Admin\SocialMediaController::class)->group(function () {
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

    //  admin setting > smtp
    Route::prefix('/smtp')->name('smtp.')->controller(\App\Http\Controllers\Admin\SmtpController::class)->group(function () {
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

    //  admin treatment image gallery // treatment sub images
    Route::prefix('/user')->name('user.')->controller(\App\Http\Controllers\Admin\AdminUserController::class)->group(function () {
        //  PAGES
        //  create / edit page has been deactivated.
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        //Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');

        //  FUNCTIONS
        Route::post('/store','store')->name('store');

        // the id at the below is user_id
        Route::post('/addRole/{id}','addRole')->name('addRole');
        Route::post('/destroyRole/{id}/{role_id}','destroyRole')->name('destroyRole');
        //Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');

    });

    //  ----------  END OF ADMIN PAGES  ----------
});
//  ************  ADMIN ENDS HERE  ************

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
