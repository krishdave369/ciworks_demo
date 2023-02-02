<?php

namespace App\Controllers;
use \CodeIgniter\Controller;

class Filter extends BaseController
{

    public $parser;
    public function __construct() {
        $this->parser = \Config\Services::parser();
    }

    public function index()
    {

        //$parser = \Config\Services::parser();
        

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
            ],
            "status" => false,
    
                 ];

        return $this->parser->setData($data2)->render("viewfilter");

       // return view('viewfilter');
    }

     public function viewFilters()
    {
       // $parser = \Config\Services::parser();

        $data = [
            'name' =>"ABC",
            'address' => 'xyz',
            'tel' => '1234567890',
            'dob' => '10-12-2002',
            'price' => '500000',
            'lorem' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
",
        ];

        return $this->parser->setData($data)->render("viewfilter");
    }
}
