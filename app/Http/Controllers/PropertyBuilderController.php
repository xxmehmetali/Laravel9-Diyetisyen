<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyBuilderController extends Controller
{
    public static function getSiteName(){
        return Property::where('key', 'siteName')->get()[0];
    }

    public static function getOpeningHoursText(){
        return Property::where('key', 'openingHoursText')->get()[0];
    }

    public static function getOpeningHoursHours(){
        return Property::where('key', 'openingHoursHours')->get()[0];
    }

    public static function getCallUsPhoneNumber(){
        return Property::where('key', 'callUsPhoneNumber')->get()[0];
    }

    public static function getCallUsText(){
        return Property::where('key', 'callUsText')->get()[0];
    }

    public static function getContactViaEmailText(){
        return Property::where('key', 'contactViaEmailText')->get()[0];
    }

    public static function getContactViaEmail(){
        return Property::where('key', 'contactViaEmail')->get()[0];
    }

    public static function getMenuText(){
        return Property::where('key', 'menuText')->get()[0];
    }

    public static function getHomepageText(){
        return Property::where('key', 'homepageText')->get()[0];
    }

    public static function getAboutUsText(){
        return Property::where('key', 'aboutUsText')->get()[0];
    }

    public static function getServicesText(){
        return Property::where('key', 'servicesText')->get()[0];
    }
    public static function getPricesText(){
        return Property::where('key', 'pricesText')->get()[0];
    }
    public static function getOurbranchesText(){
        return Property::where('key', 'ourBranchesText')->get()[0];
    }
    public static function getContactusText(){
        return Property::where('key', 'contactUsText')->get()[0];
    }
    public static function getTakeappointmentText(){
        return Property::where('key', 'takeAppointmentText')->get()[0];
    }




}
















