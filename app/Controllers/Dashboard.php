<?php
namespace App\Controllers;
use App\Models\SuratM;
use App\Models\UserM;
class Dashboard extends BaseController
{
    public function index()
    {
        $id_user = session()->get('id_user');
        $level = session()->get('level');
        $surat = new SuratM();
        $user = new UserM();
        if($level=='Admin'){
            $user = $user->getUser()->countAll();
            $t = $surat->getSurat()->countAll();
            $masuk = $surat->getSurat()->where('tb_surat.ket','masuk')->countAllResults();
            $keluar = $surat->getSurat()->where('tb_surat.ket','keluar')->countAllResults();
        }else{
            $t = $surat->where('tb_surat.id_user',$id_user)->getSurat()->countAllResults();
            $masuk = $surat->getSurat()->where('tb_surat.ket','masuk')->where('tb_surat.id_user',$id_user)->countAllResults();
            $keluar = $surat->getSurat()->where('tb_surat.ket','keluar')->where('tb_surat.id_user',$id_user)->countAllResults();
        }
        $data = [
            'title'=> 'Dashboard',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_dash'=>'active',
            'level'=>$level,
            't'=>$t,
            'masuk'=>$masuk,
            'keluar'=>$keluar,
            'user'=>$user,
        ];
        return view('dashboard',$data);
    }
}