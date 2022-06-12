<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    //getMainCategories from HomeController


    public function paymentProcess(Request $request){
        //dd($request);
        $request->request->add(['orderId' => $this->createOrder($request)]);
        $this->createAppointments($request);
//        $this->deleteFromBasket($request);
    }

    public function createOrder(Request $request){
        $order=new Order();
        $order->patientId=$request->patient_id;
        $order->dietitianId=$request->dietitian_id;
        $order->treatmentId=$request->treatment_id;
        $order->price=$request->price;
        $order->paymentType=$request->paymentType;
        $order->status="ongoing";
        $order->doctorNote="no note";

        $order->save();
        //dd($order);
        return $order->id;
    }

    // User will have more than one Appointment
    // number of appointments are : (duration * 4 (months to weeks) / frequency (already in weeks))
    public function createAppointments(Request $request){
        //dd($request);
        $totalNumberOfWeeks = intval($request->duration) * 4;
        $frequency =  intval($request->frequency);
        $totalAmountOfAppointments = $totalNumberOfWeeks / $frequency;

        $dateForAppointment = Carbon::now();
        for ($i=0; $i<$totalAmountOfAppointments;$i++){
            $appointment=new Appointment();
            $appointment->orderId=$request->orderId;
            $appointment->appointmentDate=$dateForAppointment;
            $appointment->weight="unmeasured";
            $appointment->pulseRate="unmeasured";
            $appointment->status="staged";
            $appointment->doctorNote="no note";

            $appointment->save();
            $dateForAppointment=$dateForAppointment->addWeek($request->frequency);
        }


    }

    public function deleteFromBasket(Request $request){

    }


}
