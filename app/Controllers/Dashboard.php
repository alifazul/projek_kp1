<?php
namespace App\Controllers;
use App\Models\SuratM;
use App\Models\UserM;
class Dashboard extends BaseController
{
    public function index()
    {
        helper('url');
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
        $tahun = date('Y');
		$dy = $surat->getDataperTahun($tahun);
        $data = [
            'title'=> 'Dashboard',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_dash'=>'active',
            'level'=>$level,
            't'=>$t,
            'masuk'=>$masuk,
            'keluar'=>$keluar,
            'tahun'=>$surat->getYear(),
            'g_masuk'=>$surat->getTotal('masuk'),
            'g_keluar'=>$surat->getTotal('keluar'),
            'dy' =>$dy,
            'user'=>$user,
        ];
        return view('dashboard',$data);
    }

    public function updateChart($tahun) {
        $surat = new SuratM();
        $data = $surat->getDataperTahun($tahun);
        if(intval(sizeof($data)) < 1) {
            $res = array(
                'status'=>'error',
                'msg'=>''
            );
        } else {
            $res = array(
                'status'=>'success',
                'msg'=>'',
                'data'=>$data
            );
        }
        echo json_encode($res);
    }
}