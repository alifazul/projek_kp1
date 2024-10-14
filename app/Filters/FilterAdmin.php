<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class FilterAdmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if(session()->get('level') == ''){
            return redirect()->to(base_url('auth/login'))->with('success','Belum Login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
        if(session()->get('level') == 'Admin'){
            return redirect()->to(base_url('home'))->with('success','Berhasil Login');
        }else{
            return redirect()->to(base_url('home'))->with('success','Anda tidak bisa mengakses halaman ini');
        }
    }
}