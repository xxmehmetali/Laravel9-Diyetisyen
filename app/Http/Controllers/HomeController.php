<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        echo "Index pressed from HomeController";
    }

    public function test(){

        return view('home.test');
    }
    public function param($id){

        echo "param is ".$id;
    }
    public function param2($f,$s){

        return view('home.index',
            [
                'f' => $f,
                's' => $s
            ]
        );
    }

    public function paramPost(){
        return view('home.test2');
    }

}
