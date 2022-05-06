<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $carouselSliderData = \App\Models\Treatment::limit(3)->get();
        $carouselTreatmentSliderData = \App\Models\Treatment::limit(8)->get();
        return view('home.index', [
            'carouselSliderData' => $carouselSliderData,
            'carouselTreatmentSliderData' => $carouselTreatmentSliderData
        ]);
    }

}
