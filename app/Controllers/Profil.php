<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserM;

class Profil extends BaseController
{  
    
    public function index(){
        $id_user= session()->get('id_user');
        $user = new UserM();
        $data = [
            'title'=> 'Profil',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'user'=>$user->detail($id_user)
        ];
        return view('profil',$data);
    }

    // edit
    public function update($id_user)
    {
        if(session()->get('id_user') != $id_user){
            return redirect()->to('profil')->with('warning','Anda tidak bisa mengakses halaman ini');
        }
        $user = new UserM();   
        $foto = $this->request->getFile('foto');
        if($foto->isValid() && ! $foto->hasMoved()){
         $fotoName = $foto->getClientName();
         $foto->move('images/',$fotoName);
        }
        $foto = $user['foto'];
        unlink('images/'.$foto);
        $data = [
         'id_user' => $id_user,
         'foto' => $fotoName,
         'username' => $this->request->getPost('username'),
         'nama' => $this->request->getPost('nama'), 
         'nip' => $this->request->getPost('nip'),
         'bidang' => $this->request->getPost('bidang'),
         'jabatan' => $this->request->getPost('jabatan'),
         'tempat_lahir' => $this->request->getPost('tempat_lahir'),
         'tgl_lahir' => $this->request->getPost('tgl_lahir'),
         'email' => $this->request->getPost('email'),
         'level' => $this->request->getPost('level'),
         'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
         'alamat' => $this->request->getPost('alamat'),
        ];
        $user->edit($data);
        return redirect()->to(base_url('profil'))->with('success','Profil Berhasil Diubah');
    }

    // Delete
	public function delete($id_user)
	{
        if(session()->get('id_user') != $id_user){
            return redirect()->to('profil')->with('warning','Anda tidak bisa mengakses halaman ini');
        }
        $user = new UserM();
        $data = $user->detail($id_user);
        unlink('images/'.$data['foto']);
        $user->delete($id_user);
        return redirect()->to(base_url('home/logout'))->with('success','Profil Berhasil Dihapus');
	}

}