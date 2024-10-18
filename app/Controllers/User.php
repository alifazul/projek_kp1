<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserM;
use App\Models\SuratM;

class User extends BaseController
{

    public function index()
    {
        if(session()->level != 'Admin'){
            return redirect()->to('dashboard')->with('warning','Anda tidak bisa mengakses halaman ini');
        }
        $id_user = session()->get('id_user');
        $user = new UserM();
        $users = $user->getUser()->where('id_user !=',$id_user)->findAll();
        $data = [
            'title'=> 'Tabel User',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_user'=>'active',
            'user'=> $users
        ];
        
        return view('user/tbl',$data);
    }

    public function add(){
        if(session()->level != 'Admin'){
            return redirect()->to('dashboard')->with('warning','Anda tidak bisa mengakses halaman ini');
        }
        $data = [
            'title'=> 'Tambah User',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_user'=>'active',
        ];
        
        return view('user/add',$data);
    }
    
    public function edit($id_user){
        if(session()->level != 'Admin'){
            return redirect()->to('dashboard')->with('warning','Anda tidak bisa mengakses halaman ini');
        }
        $user = new UserM();
        $data = [
            'title'=> 'Detail User',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_user'=>'active',
            'user'=>$user->detail($id_user)
        ];
        return view('user/edit',$data);
    }


    public function simpan(){
        if(session()->level != 'Admin'){
            return redirect()->to('dashboard')->with('warning','Anda tidak bisa mengakses halaman ini');
       }
       $user = new UserM();
       $file = $this->request->getFile('foto');
       $fileName = $file->getClientName();
       $ex = explode('.',$fileName);
       array_pop($ex);
       $fn = implode('',$ex);
       if($file->isValid() && ! $file->hasMoved()){
        $file->move('images/',$fileName);
       }
       $pass = $this->request->getPost('password');
       $password = password_hash($pass, PASSWORD_DEFAULT);
       $data = [
        'foto' => $fn,
        'username' => $this->request->getPost('username'),
        'password' => $password,
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

    public function update($id_user){
       if(session()->level != 'Admin'){
            return redirect()->to('dashboard')->with('warning','Anda tidak bisa mengakses halaman ini');
       }
       $user = new UserM();
       $detail = $user->detail($id_user);
       $file = $this->request->getFile('foto');
       if(strlen($file) > 0){
            $fileName = $file->getClientName();
            $ex = explode('.',$fileName);
            array_pop($ex);
            $fn = implode('',$ex);
            if($file->isValid() && ! $file->hasMoved()){
                    if(file_exists('images/'.$detail->foto)){
                        unlink('images/'.$detail->foto);
                    }
                    $file->move('images/',$fileName);
            }
       }else{
            $fn = $detail->foto;
       }
       $pass = $this->request->getPost('password');
       $password = password_hash($pass, PASSWORD_DEFAULT);
       $data = [
        'id_user'=>$id_user,
        'foto' => $fn,
        'username' => $this->request->getPost('username'),
        'password' => $password,
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
       return redirect()->to('user')->with('success','Data User Berhasil Diubah');
    }

    // Delete
	public function delete($id_user)
	{
        if(session()->level != 'Admin'){
            return redirect()->to('dashboard')->with('warning','Anda tidak bisa mengakses halaman ini');
        }
        $user = new UserM();
        $detail = $user->detail($id_user);
        $surat = new SuratM();
        $surat = $surat->getSuratIDUser($id_user);
        if($surat->countAllResults()>0){
            return redirect()->to(base_url('user'))->with('warning',' Hapus data surat dengan username '.$detail->username.' terlebih dahulu.'); 
        }else{
            if(file_exists('images/'.$detail->foto)){
                unlink('images/'.$detail->foto);
            }
            $user->delete($id_user);
            return redirect()->to(base_url('user'))->with('success','Data User Berhasil Dihapus ');
        }
        //$data = $user->detail($id_user);
        //unlink('images/'.$data['foto']);
        
	}

    public function reset_password($id_user){
        if(session()->level != 'Admin'){
            return redirect()->to('dashboard')->with('warning','Anda tidak bisa mengakses halaman ini');
       }
       $user = new UserM();
       $pass = $this->kodeAcak(6);
       $password = password_hash($pass, PASSWORD_DEFAULT);
       $data = [
        'id_user'=>$id_user,
        'password' => $password,
       ];
       $user->edit($data);
       return redirect()->to('user')->with('success','Password Baru = '.$pass);
    }

    public function edit_status($id_user){
        if(session()->level != 'Admin'){
            return redirect()->to('dashboard')->with('warning','Anda tidak bisa mengakses halaman ini');
       }
       $user = new UserM();
       $detail = $user->detail($id_user);
       if($detail->status == 'aktif'){
            $status = 'nonaktif';
       }else if($detail->status == 'nonaktif'){
            $status = 'aktif';
       }
       $data = [
        'id_user'=>$id_user,
        'status' => $status,
       ];
       $user->edit($data);
       return redirect()->to('user')->with('success','Status User Berhasil diubah');
    }

    function kodeAcak($panjang){
        $karakter = '';
        $karakter .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; // karakter alfabet
        $karakter .= '1234567890'; // karakter numerik
        $karakter .= '@#$^*()_+=/?'; // karakter simbol

        $string = '';
        for ($i=0; $i < $panjang; $i++) { 
            $pos = rand(0, strlen($karakter)-1);
            $string .= $karakter[$pos];
        }
        return $string;
    }
}