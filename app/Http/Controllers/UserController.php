<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    // categoriesForNavbar Buradan besleniyor
    public static function getMainCategories(){
        return Category::all()->where('parentId',null);
    }

    public function profileSave(Request $request){
        $user=User::find($request->user_id);
        //dd($request);
        if($request->name)
            $user->name=$request->name;
        if($request->phoneNumber)
            $user->getProfile->phoneNumber=$request->phoneNumber;
        if($request->address)
            $user->getProfile->address=$request->address;
        if($request->email)
            $user->email=$request->email;

        $user->save();

        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.profile', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories()
        ]);
    }

    public function userPanel(){


        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.userPanel', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'user_id' => Auth::user()->id
        ]);
    }


    public function myOrders($user_id){
        $orders=Order::Where('patientId', $user_id)->get();
        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.myOrders', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'orders' => $orders
        ]);
    }

    public function myReviews($user_id){
        $reviews=Comment::Where('userId', $user_id)->get();

        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.myReviews', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'comments' => $reviews
        ]);
    }

    public function onGoingPackets($user_id){
        $onGoingPackets=Treatment::Where([['userId','=',$user_id],['status','=','true']])->get();

        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.onGoingPackets', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'onGoingPackets' => $onGoingPackets
        ]);
    }




}
