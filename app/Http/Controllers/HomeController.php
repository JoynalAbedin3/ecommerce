<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     function index(){
        return view('frontend.home');
    }
     function shop(){
        return view('frontend.shop');
    } 
    function single(){
        return view('frontend.single');
    }

}
