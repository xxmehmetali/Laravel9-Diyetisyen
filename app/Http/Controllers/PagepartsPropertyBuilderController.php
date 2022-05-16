<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagepartsPropertyBuilderController extends Controller
{
    public static function getTopbarProperties(){
        $object = new \stdClass();

        $object->siteName = PropertyBuilderController::getSiteName();
        $object->openingHoursText = PropertyBuilderController::getOpeningHoursText();
        $object->openingHoursHours = PropertyBuilderController::getOpeningHoursHours();
        $object->callUsPhoneNumber = PropertyBuilderController::getCallUsPhoneNumber();
        $object->callUsText = PropertyBuilderController::getCallUsText();
        $object->contactViaEmailText = PropertyBuilderController::getContactViaEmailText();
        $object->contactViaEmail = PropertyBuilderController::getContactViaEmail();

        return $object;
    }

    public static function getNavbarProperties(){
        $object = new \stdClass();

        $object->menuText = PropertyBuilderController::getMenuText();
        $object->homepageText = PropertyBuilderController::getHomepageText();
        $object->aboutUsText = PropertyBuilderController::getAboutUsText();
        $object->servicesText = PropertyBuilderController::getServicesText();
        $object->pricesText = PropertyBuilderController::getPricesText();
        $object->ourBranchesText = PropertyBuilderController::getOurbranchesText();
        $object->contactUsText = PropertyBuilderController::getContactusText();
        $object->takeAppointmentText = PropertyBuilderController::getTakeappointmentText();

        return $object;
    }

    public static function getAboutProperties(){
        $object = new \stdClass();



        return $object;
    }


}
