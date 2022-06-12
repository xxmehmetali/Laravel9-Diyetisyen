<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ShopCart;
use Illuminate\Http\Request;

class ShopCartController extends Controller
{

    // categoriesForNavbar Buradan besleniyor
    public static function getMainCategories(){
        return Category::all()->where('parentId',null);
    }

    public function addToCart(Request $request){
        $shopCart = new ShopCart();
        $shopCart->user_id=$request->user_id;
        $shopCart->treatment_id=$request->treatment_id;

        $shopCart->save();

    }

    public function removeFromCart($user_id, $treatment_id){

    }

    public function basket($user_id){
        $shopCarts = ShopCart::Where('user_id',$user_id)->get();
        $homePageProperties = FrontstorePropertyBuilderController::homePagePropertyBuilder();
        return view('home.basket', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'basketItems' => $shopCarts
        ]);
    }

    public function payment(Request $request){
        $homePageProperties = FrontstorePropertyBuilderController::homePagePropertyBuilder();
        return view('home.payment', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'essentialInfo' => $request
        ]);
    }
}
