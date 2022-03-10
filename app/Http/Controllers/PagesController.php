<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        //
        return view('pages.login');
    }

    public function register(){
        //
        return view('pages.register');
    }

    public function homepage(){
        //
        return view('pages.homepage');
    }
}
