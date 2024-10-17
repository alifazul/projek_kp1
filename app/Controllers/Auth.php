<?php
namespace App\Controllers;
use App\Models\AuthM;
class Auth extends BaseController
{
    public function __construct()
    {
       helper('form'); 
    }

    public function login()
    {
                $user = $this->request->getPost('username');
                $pass = $this->request->getPost('password');
                if(strlen($user)>0 && strlen($pass)>0){
                  //code run when it is true
                  $auth = new AuthM();
                    $username = $auth->getUser($user);
                    if($username->getNumRows() > 0){
                        $xx = $username->getRow();
                        if(password_verify($pass,$xx->password)){
                            session()->set('log',true);
                            session()->set('id_user',$xx->id_user);
                            session()->set('nama',$xx->nama);
                            session()->set('level',$xx->level);
                            session()->set('password',$xx->password);
                            session()->set('foto',$xx->foto);
                            return redirect()->to(base_url('home'))->with('success','Berhasil Login');
                        }else{
                            return redirect()->to(base_url('home/login'))
                            ->with('error','Password Salah');
                        }
                    }else{
                        return redirect()->to(base_url('home/login'))->with('error','Username Salah');
                    }  
                }else{
                   //code run when it is false
                   return redirect()->to(base_url('home/login'));
                }        
    }

    public function logout(){
        session()->remove('log');
        session()->remove('id_user');
        session()->remove('nama');
        session()->remove('level');
        session()->remove('password');
        session()->remove('foto');
        return redirect()->to(base_url('home/login'))->with('success','Berhasil Logout');
    }

}