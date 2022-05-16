<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class FrontstorePropertyBuilderController extends Controller
{

    //  Returns only the properties for homepage
    public static function homePagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function aboutUsPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function servicePagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function pricesPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function locationPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function contactPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function blogPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function bookingPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function teamPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function loginPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function profilePagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function browseDietitianPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }

    public static function faqPagePropertyBuilder(){
        //  Building the object of properties
        $object = new \stdClass();
        $object->topbarProperties = PagepartsPropertyBuilderController::getTopbarProperties();
        $object->navbarProperties = PagepartsPropertyBuilderController::getNavbarProperties();

        return $object;
    }




    //  burada başka bir fonksiyon ancak farklı bir sayfanın propertysini yollar
    // public static function ...

}
