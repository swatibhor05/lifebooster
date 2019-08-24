<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function career(){
        return view('application.views.career');
    }

    public function login(){
        return view('application.views.login');
    }

    public function register(){
        return view('application.views.register');
    }

    public function children(){
        return view('application.views.children');
    }


    


    
}
