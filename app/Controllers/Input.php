<?php

namespace App\Controllers;

use App\Models\InputModel;

use App\Models\HasilModel;




class Input extends BaseController
{


    public function __construct()
    {
       
        $this->InputModel = new InputModel();
        $this->HasilModel = new HasilModel();
    }
    

 
    public function index()
    {

      
        $input = $this->InputModel->input_list();
        $hasil = $this->HasilModel->hasil_list();
        
        $data = [
            'title' => 'BOD Eksisting',
            'input' => $input,
            'hasil' => $hasil,
        ];

        return view('pages/input' , $data);

    }

        
 
    
}
