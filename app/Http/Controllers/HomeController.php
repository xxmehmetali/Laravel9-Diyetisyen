<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Image;
use App\Models\MessageSubject;
use App\Models\Property;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category, $title){
        if($category->parentId == 0)
            return $title;
        $parent = Category::find($category->parentId);
        $title = $parent->title . ' > ' . $title;
        return CategoryController::getParentsTree($parent, $title);
    }

    // categoriesForNavbar Buradan besleniyor
    public static function getMainCategories(){
        return Category::all()->where('parentId',null);
    }

    // anasayfadaki 3 kart buradan besleniyor
    public static function getCategoriesForCategoryCards(){
        return Category::limit(3)->get();
    }

    public function index(){
        $carouselSliderData = \App\Models\Treatment::limit(8)->get();
        $carouselTreatmentSliderData = \App\Models\Treatment::limit(8)->get();
        $homePageProperties = FrontstorePropertyBuilderController::homePagePropertyBuilder();

        return view('home.index', [
            'carouselSliderData' => $carouselSliderData,
            'carouselTreatmentSliderData' => $carouselTreatmentSliderData,
            'categoriesForCategoryCards' => self::getCategoriesForCategoryCards(),
            'categoriesForNavbar' =>self::getMainCategories(),
            'homePageProperties' => $homePageProperties
        ]);
        //navbar properties ne seeder de tanımlandı ne de fonksiyonları
        //propertybuilder da tanımlandı bunları python scripti ile oluştur yap
    }
    public function indexx(){

        //return view('home.test', [ 'object' => $object]);
        $homePageProperties = FrontstorePropertyBuilderController::homePagePropertyBuilder();
        //return $homePageProperties;
        return $homePageProperties;

    }

    public function about(){
        $homePageProperties = FrontstorePropertyBuilderController::aboutUsPagePropertyBuilder();
        return view('home.about', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function service(){
        $homePageProperties = FrontstorePropertyBuilderController::servicePagePropertyBuilder();
        return view('home.service', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function prices(){
        $homePageProperties = FrontstorePropertyBuilderController::pricesPagePropertyBuilder();
        return view('home.prices', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function location(){
        $homePageProperties = FrontstorePropertyBuilderController::locationPagePropertyBuilder();
        return view('home.location', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function contact(){
        $homePageProperties = FrontstorePropertyBuilderController::contactPagePropertyBuilder();
        $messageSubjects = MessageSubject::all();
        return view('home.contact', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'messageSubjects' => $messageSubjects
        ]);
    }
    public function blog(){
        $homePageProperties = FrontstorePropertyBuilderController::blogPagePropertyBuilder();
        return view('home.blog', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function booking(){
        $homePageProperties = FrontstorePropertyBuilderController::bookingPagePropertyBuilder();
        return view('home.booking', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function team(){
        $homePageProperties = FrontstorePropertyBuilderController::teamPagePropertyBuilder();
        return view('home.team', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function login(){
        $homePageProperties = FrontstorePropertyBuilderController::loginPagePropertyBuilder();
        return view('home.logIn-Register', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function profile(){
        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.profile', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function browseDietitian(){
        $homePageProperties = FrontstorePropertyBuilderController::browseDietitianPagePropertyBuilder();
        return view('home.browseDietitian', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }
    public function faq(){
        $homePageProperties = FrontstorePropertyBuilderController::faqPagePropertyBuilder();
        $faqs = Faq::all();
        return view('home.faq', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'faqs' => $faqs
        ]);
    }

    public function treatmentDetailPage($id){
        $treatment = \App\Models\Treatment::find($id);
        $treatmentImages = Image::where('treatmentId', $id);
        $homePageProperties = FrontstorePropertyBuilderController::homePagePropertyBuilder();
        $comments = Comment::where('treatmentId', $treatment->id)->get();
        //dd($comments);
            //Setting::where('settingName', 'property')->get()[0]->id;
        return view('home.treatmentDetailPage', [
            'homePageProperties' => $homePageProperties,
            'treatment' => $treatment,
            'treatmentImages' => $treatmentImages,
            'categories' => self::getMainCategories(),
            'categoriesForNavbar' => self::getMainCategories(),
            'comments' => $comments
        ]);
    }

    public function treatmentListPage($categoryId){
        $data = \App\Models\Treatment::all()->where('categoryId', $categoryId);
        $homePageProperties = FrontstorePropertyBuilderController::homePagePropertyBuilder();
        return view('home.treatmentListPage', [
            'homePageProperties' => $homePageProperties,
            'data' => $data,
            'categories' => self::getMainCategories(),
            'categoriesForNavbar' => self::getMainCategories()
        ]);
    }


    public function logout(Request $request){
        $homePageProperties = FrontstorePropertyBuilderController::faqPagePropertyBuilder();

        Auth::logout();
        $request->session()->invalidate();
        $request>session()->regenerateToken();

        return redirect('/');
    }


}

