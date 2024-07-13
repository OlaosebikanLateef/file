<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function idex(Request $request){
        return view('');
       }

       public function about(Request $request){
        return view('about');
       }
   
}
