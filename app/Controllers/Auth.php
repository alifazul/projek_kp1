<?php
namespace App\Controllers;
use App\Models\AuthM;
use App\Models\SuratM;
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

    public function cek_login()
    {
            //jika valid
            $user = $this->request->getPost('username');
            $pass = $this->request->getPost('password');
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
                    return redirect()->to(base_url('auth/login'))->with('success','Password Salah');
                }
            }else{
                return redirect()->to(base_url('auth/login'))->with('success','Username Salah');
            }
        
    }

    public function logout(){
        session()->remove('log');
        session()->remove('id_user');
        session()->remove('nama');
        session()->remove('level');
        session()->remove('password');
        session()->remove('foto');
        return redirect()->to(base_url('auth/login'))->with('success','Berhasil Logout');
    }

    public function index()
	{

		// get parameter
		helper('url');
		$page = $this->request->getGet('page_surat');
		$search = esc($this->request->getGet('q'));
		$data['search'] = $search;
		$sort = esc($this->request->getGet('sort'));		
		$data['sort'] = $sort;	
        $kat1 = esc($this->request->getGet('kat1'));		
		$data['kat1'] = $kat1;	
		$kat2 = esc($this->request->getGet('kat2'));		
		$data['kat2'] = $kat2;	
		$bulan = esc($this->request->getGet('bulan'));		
		$data['bulan'] = $bulan;	
		$tahun = esc($this->request->getGet('tahun'));		
		$data['tahun'] = $tahun;				

		// load model
		$suratModel = new \App\Models\SuratmM();

		// data kat1
		$data['kats1'] = $suratModel->getKat1();

        // data kat2
		$data['kats2'] = $suratModel->getKat2();

		// data kat2
		$data['months'] = $suratModel->getMonth();

		// data kat2
		$data['years'] = $suratModel->getYear();

        
	    if ($search) {
			$data['products'] = $suratModel->getData(12, 'surat', $sort, $search);            
		}elseif ($kat1) {
			$data['surats'] = $suratModel->getData(12, 'surat', $sort, null, $kat1);            
		}else{
			$data['surats'] = $suratModel->getData(12, 'surat', $sort);
        }
		$data['pager'] = $suratModel->pager;

		if ($search) {
			if ($page) {
				$data['title'] = 'Search : '.$search . ' Page '.$page;
			}else{
				$data['title'] = 'Search : '. $search;
			}
		}elseif ($kat1) {
			if ($page) {
				$data['title'] = 'Kat1 : '.$kat1 . ' Page '.$page;
			}else{
				$data['title'] = 'Kat1 : '. $kat1;
			}         
		}else{
			if ($page) {
				$data['title'] = 'Surat - Page '.$page;
			}else{
				$data['title'] = 'Home';	    		
			}
		}	

		// build response
		if ($this->request->isAjax()) {
			// resposne for json
			return $this->response->setJSON([
				'title' => $data['title'],
				'content' => view('surat/item', $data)
				]);
		}else{
			// respnse for html
			return view('search', $data);
		}
	}

}