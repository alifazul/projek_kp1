<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserM;

class User extends BaseController
{

    public function index()
    {
        $user = new UserM();
        $data = [
            'title'=> 'Tabel User',
            'active1'=> '',
            'active3'=> 'active',
            'title2'=> 'Tabel User',
            'user'=>$user->getUser()
        ];
        return view('tbl_user',$data);
    }

    public function add(){
        $data = [
            'title'=> 'Tambah User',
            'active1'=> '',
            'active3'=> 'active',
            'title2'=> 'Tambah User',
        ];
        return view('add_user',$data);
    }
    
    public function detail($id_user){
        $user = new UserM();
        $data = [
            'user'=>$user->detail($id_user)
        ];
        return view('detail_user',$data);
    }

    public function edit($id_user){
        $user = new UserM();
        $data = [
            'user'=>$user->detail($id_user)
        ];
        return view('edit_user',$data);
    }

    public function simpan(){
       $user = new UserM();
       $foto = $this->request->getFile('foto');
       if($foto->isValid() && ! $foto->hasMoved()){
        $fotoName = $foto->getClientName();
        $foto->move('images/',$fotoName);
       }

       $data = [
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
       $user->tambah($data);
       return redirect()->to('user')->with('success','Data User Berhasil Ditambahkan');
    }



    // edit
    public function update($id_user)
    {
        $user = new UserM();
        $user = $user->detail($id_user);
        $foto = $this->request->getFile('foto');
        if($foto->isValid() && ! $foto->hasMoved()){
         $fotoName = $foto->getClientName();
         $foto->move('images/',$fotoName);
        }
 
        $data = [
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
        return redirect()->to(base_url('user'));
    }

    // Delete
	public function delete($id_user)
	{
        $user = new UserM();
        $data = $user->detail($id_user);
        unlink('images/'.$data['foto']);
        $user->delete($id_user);
        return redirect()->to(base_url('User'))->with('success','Data User Berhasil Dihapus ');
	}

}