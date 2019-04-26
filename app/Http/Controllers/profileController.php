<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    
     public function index(){

     	 return view ('demand.profile');
     }

     public function saveProfile(Request $request){

     	 
     	  dump($request->entreprise);
     	  
     }
}
