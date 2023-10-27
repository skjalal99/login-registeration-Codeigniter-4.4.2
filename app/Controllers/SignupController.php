<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\companiesModel;

class SignupController extends BaseController
{
    public function index($param='')
    {
        $companiesSelect = new companiesModel();
        helper(['form']);
        $data['companies'] = $companiesSelect->findAll();
        // $data = [];
        echo view('templates/login/header');
        echo view('signup', $data);
        echo view('templates/login/footer');
    }
  
    public function store()
    {
        // print_r($this->request->getVar('company'));
        helper(['form']);
        $rules = [
            'uname'          => 'required|min_length[2]|max_length[50]',
            'fname'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[admin_users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]',
            'company'          => 'required',
        ];
          
        if($this->validate($rules)){
            $usersignup = new LoginModel();
            $id = $this->request->getVar('company');
            $data = [
                'username'  => $this->request->getVar('uname'),
                'full_name' => $this->request->getVar('fname'),
                'email'     => $this->request->getVar('email'),
                'password_hash'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'company_id'=> $id
            ];

            $usersignup->save($data);
            return redirect()->to('/login');
        }else{
            $companiesSelect = new companiesModel();
            $data['validation'] = $this->validator; //if rules not validated //validation data
            $data['companies'] = $companiesSelect->findAll(); //companies table data
            echo view('templates/login/header');
            echo view('signup', $data);
            echo view('templates/login/footer');
            //$this->index( $data);
        }
          
    }
  
}
