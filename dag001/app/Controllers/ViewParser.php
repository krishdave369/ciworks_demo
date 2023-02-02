<?php

namespace App\Controllers;

class ViewParser extends BaseController
{
    public function index()
    {

        $data = [
            ['Name', 'City', 'Address'],
            ['Kamal', 'Negombo','167/N, Main Road...'],
            ['Nimal', 'Chilaw', '252, Kurunegala Road'],
            ['Dinuk', 'Ja-Ela', '45/A, Church road.']
       ];

       $data2 = [
        'name' =>"ABC",
        'address' => 'xyz',
        'tel' => '1234567890',
        'subjects' => [
                        ["sub" => "ICT"],
                        ["sub" => "Maths"],
                        ["sub" => "Tamil"],
                        ["sub" => "Sinhala"],
                        ["sub" => "Econ"],
                        ["sub" => "Science"]
        ],
        'dlist' => [
            ['Name', 'City', 'Address'],
            ['Kamal', 'Negombo','167/N, Main Road...'],
            ['Nimal', 'Chilaw', '252, Kurunegala Road'],
            ['Dinuk', 'Ja-Ela', '45/A, Church road.']
       ]

             ];

       $parser = \Config\Services::parser();

       $parser->setData($data2);
       return $parser->render('vparse');

        //return view('vparse',$data2);
    }
}
