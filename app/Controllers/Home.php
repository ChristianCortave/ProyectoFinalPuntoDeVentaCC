<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('footer');
       
        return view('vista_menu');
    }
    public function unidades()
    {
       
        echo view('footer');
        return view('unidades');
        
    }
   
}
