<?php

namespace App\Controllers;


use App\Models\InputModel;

use App\Models\HasilModel;

class Hasil extends BaseController
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

        return view('/pages/hasil' , $data );
    }
    

    public function create__hasil()
    {
        $data = [
            
            'id' => $this->request->getPost('id'),
            'a' => $this->request->getPost('a'),
            'b' => $this->request->getPost('b'),
            'result' => $this->request->getPost('result'),
            'pearson' => $this->request->getPost('pearson'),
            'koefisien_determinasi' => $this->request->getPost('koefisien_determinasi'),
          
        ];
        $this->HasilModel->hasil_create($data);
        return redirect()->to('/hasil');
    }


 

    public function create__input()
    {
        $data = [
            
            'id' => $this->request->getPost('id'),
            'x' => $this->request->getPost('x'),
            'y' => $this->request->getPost('y'),
          
        ];
        $this->InputModel->input_create($data);
        return redirect()->to('/');
    }



}
