<?php
namespace App\Controllers;
class Auth extends BaseController
{
    public function __construct()
    {
       helper('form'); 
    }

    public function login()
    {
        $data = [
            'title'=> 'Login',
        ];
        return view('login',$data);
    }

    public function save_login()
    {
        if($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi!'
                ]
            ]
        ])) {
            //jika valid

        }else{
            //jika tidak valid
            session()->setFlashdata('errors',\Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }
}