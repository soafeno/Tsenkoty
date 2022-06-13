<?php

namespace App\Http\Controllers;
use App\Models\NewModel;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function accueil(){
        return view('page.accueil');
    }
    public function param(){
             return view('page.parametre');
     }
     public function message(){
        return view('page.message');
    }
  
        
}