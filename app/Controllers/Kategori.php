<?php
namespace App\Controllers;

use App\Models\KategoriM;
use App\Models\SuratM;

class Kategori extends BaseController
{
    public function index()
    {
        $kat = new KategoriM();
        $kat1 = $kat->getKat1();
        $kat2 = $kat->getKat2();
        $data = [
            'title'=> 'Kategori',
            'nav'=>'nav_dash',
            'side'=>'sidebar',
            'side_kat'=>'active',
            'kat1'=>$kat1,
            'kat2'=>$kat2,
        ];
        return view('kategori',$data);
    }

    public function add($kat){
       $user = new KategoriM();
       $data = [
        $kat => $this->request->getPost('kat'),
       ];
       $user->tambah($data,$kat);
       return redirect()->to('kategori')->with('success','Kategori Berhasil Ditambahkan');
    }

    public function delete($kat, $id_kat)
	{
        $t_kat = new KategoriM();
        $surat = new SuratM();
        if($kat=='kat1'){
            $tkat = $t_kat->detailKat1($id_kat);
            $surat = $surat->getSuratKat1($id_kat);
        }elseif($kat=='kat2'){
            $tkat = $t_kat->detailKat2($id_kat);
            $surat = $surat->getSuratKat2($id_kat);
        }
        if($surat>0){
            return redirect()->to(base_url('kategori'))->with('warning',' Hapus data surat dengan kategori '.$tkat->$kat.' terlebih dahulu.'); 
        }else{
            $t_kat->delete('tb_'.$kat);
            return redirect()->to(base_url('kategori'))->with('success','Data '.$kat.' Berhasil Dihapus ');
        }
	}
}