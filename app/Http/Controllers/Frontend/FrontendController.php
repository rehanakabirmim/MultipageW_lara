<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   //for home page
   public function index(){
    return view('frontend.index');
   }
   
    //for about page
    public function about(){
      return view('frontend.about');
     }

     //for menu page
     public function menu(){
      return view('frontend.menu');
     }

     //for contact page
     public function contact(){
      return view('frontend.contact');
     }
   
       //for news page
       public function news(){
         return view('frontend.news');
        }

         //for news page
       public function newsDeatail(){
         return view('frontend.news-detail');
        }
   
   

}
