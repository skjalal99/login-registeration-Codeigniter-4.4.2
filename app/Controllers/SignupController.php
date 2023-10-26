<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;

class SignupController extends BaseController
{
    public function index($param='')
    {
        helper(['form']);
        $data = [];
        echo view('templates/login/header');
        echo view('signup', $data);
        echo view('templates/login/footer');
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'uname'          => 'required|min_length[2]|max_length[50]',
            'fname'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[admin_users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $usersignup = new LoginModel();
            $data = [
                'username'  => $this->request->getVar('uname'),
                'full_name' => $this->request->getVar('fname'),
                'email'     => $this->request->getVar('email'),
                'password_hash'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'company_id'=> '3'
            ];
            $usersignup->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator; //if rules not validated
            echo view('templates/login/header');
            echo view('signup', $data);
            echo view('templates/login/footer');
            //$this->index( $data);
        }
          
    }
  
}
