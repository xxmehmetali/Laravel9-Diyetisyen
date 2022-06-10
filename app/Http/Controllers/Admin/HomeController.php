<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        return view('admin.index');
    }

    public function login(Request $request){
        $credentials = $request->validate([
           'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        //dd($credentials);
        if(Auth::attempt( $credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }


        return back()->withErrors([
            'email' => 'Provided credentials are not recognized.',
        ])->onlyInput('email');

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request>session()->regenerateToken();

        return redirect('/');
    }

}
