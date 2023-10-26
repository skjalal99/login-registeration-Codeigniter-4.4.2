<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
  
class SigninController extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('templates/login/header');
        echo view('login');
        echo view('templates/login/footer');
    }   
    

  
    public function loginAuth()
    {
        $session = session();
        $loginUser = new LoginModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
      

        $data = $loginUser->where('username', $username)->first();

        
        
        if($data){
            $pass = $data['password_hash'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['admin_user_id'],
                    'name' => $data['full_name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/profile');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/login');
        }
    }

    public function signout()
    {   
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    } 




}