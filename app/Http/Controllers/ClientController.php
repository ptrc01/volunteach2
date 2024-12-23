<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class ClientController extends Controller
{
    public function navigateToHome(){
        return view('Home');
    }

    public function navigateToContactUs(){
        return redirect()->route('Home'). '#contact-us';
    }

    public function navigateToEvents(){
        return view('Events');
    }

    public function navigateToAboutUs(){
        return view('AboutUs');
    }

    public function navigateToSignUp(){
        return view('SignUp');
    }

    public function navigateToLogin(){
        return view('SignIn');
    }

}
