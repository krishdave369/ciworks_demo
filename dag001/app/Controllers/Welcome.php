<?php

namespace App\Controllers;

 class Welcome extends BaseController
 {
     public function index()
    {
       echo "Welcome..!";
    }

    public function test ($id){
        echo "Testing...." . $id;
    }
    
 }


?>