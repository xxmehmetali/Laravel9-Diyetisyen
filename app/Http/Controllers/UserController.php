<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        $onGoingPackets=Order::Where([['patientId',$user_id], ['status','ongoing']])->get();
//        dd($onGoingPackets);

        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.onGoingPackets', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'onGoingPackets' => $onGoingPackets
        ]);
    }

    public function sendComment(Request $request){
        //dd($request);
        $comment = new Comment();
        $comment->subject=$request->subject;
        $comment->rate=$request->rate;
        $comment->treatmentId=$request->treatmentId;
        $comment->userId=$request->userId;
        $comment->ip=$request->ip;
        $comment->status="Staged";
        $comment->comment=$request->comment;

        $comment->save();

        return redirect()->back();

    }


    public function createTreatmentByDoctor(Request $request){



    }
    //bu sayfadan detaya gidince patientAppointments a gidecek. burda sayfaya yönlendirme olacak.
    //orda doctor note kısmına bişeyler yazabilecek appointmentta değişiklik yapabilecek.
    public function myPatients($doctor_id){
        //unique tekrar eden kayıtları tek gibi gösterir.
        $ordersRelatedToThisDoctor=Order::Where('dietitianId',$doctor_id)->get()->unique(['patientId']);

        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.myPatients', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'ordersRelatedToThisDoctor' => $ordersRelatedToThisDoctor
        ]);
    }

    //
    public function patientAppointments($doctor_id, $patient_id){
        $specificAppointments=Order::Where([['dietitianId',$doctor_id],['patientId', $patient_id]])->get();

        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.patientAppointments', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'specificAppointments' => $specificAppointments
        ]);
    }

    public function allAppointments($order_id){
        $allAppointments=Appointment::Where('orderId',$order_id)->get();

        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.allAppointments', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'allAppointments' => $allAppointments
        ]);
    }

    public function assessAppointment($appointment_id){
        $appointment=Appointment::find($appointment_id);

        $homePageProperties = FrontstorePropertyBuilderController::profilePagePropertyBuilder();
        return view('home.assessAppointment', [
            'homePageProperties' => $homePageProperties,
            'categoriesForNavbar' =>self::getMainCategories(),
            'appointment' => $appointment
        ]);
    }

    public function assessAppointmentAction(Request $request){
        $appointment=Appointment::find($request->appointment_id);
        $appointment->weight=$request->weight;
        $appointment->pulseRate=$request->pulseRate;
        $appointment->doctorNote=$request->doctorNote;
        $appointment->status=$request->status;

        $appointment->save();

        return redirect()->back();
    }



}
