<?php

namespace App\Controllers;

class Signin extends BaseController
{
    public function index()
    {
         $data = [
             'name' =>"ABC",
             'address' => 'xyz',
             'tel' => '1234567890',
             'subjects' => ["ICT","Maths", "Tamil" ,"Sinhala", "Econ", "Science"]
         ];

        echo view("header"); 
        echo view("signin",$data); 
        echo view("footer");    
       // return view('signin');
    }
}




//SignInController