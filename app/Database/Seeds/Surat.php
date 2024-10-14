<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Surat extends Seeder
{
    public function run()
    {
        $replacement = function ($matches) {
            $array = explode("|", $matches[1]);
            return $array[array_rand($array)];
        };

        // get all user id
        $user_ids = $this->db->table('tb_user')->select('id_user')->get()->getResultArray();
        // get all user id
        $kat1 = $this->db->table('tb_kat1')->select('kat1')->get()->getRowArray();
        $im_kat1 = implode("|",$kat1);
        $kat1_count = $this->db->table('tb_kat1')->select('kat1')->countAll();
        // get all user id
        $kat2 = $this->db->table('tb_kat2')->select('kat2')->get()->getRowArray();
        $im_kat2 = implode("|",$kat2);
        $kat2_count = $this->db->table('tb_kat2')->select('kat2')->countAll();
        // build random data
        $data = [];
        for ($i=0; $i < 100 ; $i++) { 
            $surat_dari = "{PT A|Dinas C|Pemerintah Z|Dari X| Dari K|Desa B}";
            $tahun = rand(2015,2024);
            $bulan = rand(01,12);
            $hari = rand(1,31);
            $akat1 = "{pengadaan|undangan|permohonan|perbaikan|masalah}";
            $rand_kat1 = preg_replace_callback("/\{([^}]+)\}/", $replacement,$akat1) ;
            $akat2 = "{inventaris|website|data}";
            $rand_kat2 = preg_replace_callback("/\{([^}]+)\}/", $replacement,$akat2) ;
            $surat_dari_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $surat_dari);
            $sifat = "{segera|sangat segera|rahasia}";
            $sifat_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $sifat);
            $file = "{E-Perpustakaan  User_1|AdminLTE 3  DataTables|LP_S}";
            $file_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $file); 
            $data[] = [
                'surat_dari' => $surat_dari_spin,
                'tgl_surat' => $tahun.'-'.$bulan.'-'.$hari,
                'no_surat' => rand(),
                'tgl_terima' => $tahun.'-'.$bulan.'-'.$hari,
                'no_agenda' => rand(),
                'sifat' => $sifat_spin,
                'kat1' => $rand_kat1,
                'kat2' => $rand_kat2,
                'file' => $file_spin.'.pdf',
                'id_user' => array_rand($user_ids) + 1,
                'created_at' => date('Y-m-d H:i:s'),         
            ];
        }  

        $this->db->table('tb_surat_masuk')->insertBatch($data);
    }
}
