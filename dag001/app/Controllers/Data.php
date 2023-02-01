<?php

namespace App\Controllers;
use \CodeIgniter\View\Table;

class Data extends BaseController
{
    public function index()
    {
       $table = new Table();

       $table2 = new Table();

       $data = [
            ['Name', 'City', 'Address'],
            ['Kamal', 'Negombo','167/N, Main Road...'],
            ['Nimal', 'Chilaw', '252, Kurunegala Road'],
            ['Dinuk', 'Ja-Ela', '45/A, Church road.']
       ];

     $records['users'] = $table->generate($data);

     $template = [
        'table_open' => '<table border="0" cellpadding="4" cellspacing="0" class="table">',
    
        'thead_open'  => '<thead>',
        'thead_close' => '</thead>',
    
        'heading_row_start'  => '<tr>',
        'heading_row_end'    => '</tr>',
        'heading_cell_start' => '<th>',
        'heading_cell_end'   => '</th>',
    
        'tfoot_open'  => '<tfoot>',
        'tfoot_close' => '</tfoot>',
    
        'footing_row_start'  => '<tr>',
        'footing_row_end'    => '</tr>',
        'footing_cell_start' => '<td>',
        'footing_cell_end'   => '</td>',
    
        'tbody_open'  => '<tbody>',
        'tbody_close' => '</tbody>',
    
        'row_start'  => '<tr>',
        'row_end'    => '</tr>',
        'cell_start' => '<td>',
        'cell_end'   => '</td>',
    
        'row_alt_start'  => '<tr>',
        'row_alt_end'    => '</tr>',
        'cell_alt_start' => '<td>',
        'cell_alt_end'   => '</td>',
    
        'table_close' => '</table>',
    ];
    
    $table2->setTemplate($template);
    

     $table2->setHeading(['Author','Page No','Version']);
     $table2->addRow(['Krish Dave','21',1.0]);

     $frecords['desc'] = $table2->generate();

     echo view('header');
     echo view("dataview",$records);
     echo view('footer',$frecords);
    }
}
