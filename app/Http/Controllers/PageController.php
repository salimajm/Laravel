<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function afficher1(){
        return view('page1');

    }   
    public function afficher2(){
        return view('about');

    }
   
   
}
