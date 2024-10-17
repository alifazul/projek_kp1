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

        // build random data
        $data = [];
        for ($i=0; $i < 100 ; $i++) { 
            $surat = "{PT A|Dinas C|Pemerintah Z|Dari X| Dari K|Desa B}";
            $surat_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $surat);
            $tahun = rand(2015,2024);
            $bulan = rand(1,12);
            $hari = rand(1,31);
            $ter = "{kepala|wakil|manajer}";
            $rand_ter1 = preg_replace_callback("/\{([^}]+)\}/", $replacement,$ter) ;
            $rand_ter2 = preg_replace_callback("/\{([^}]+)\}/", $replacement,$ter) ;
            $tin = "{ttd|kirim ke x|teruskan}";
            $rand_tin1 = preg_replace_callback("/\{([^}]+)\}/", $replacement,$tin) ;
            $rand_tin2 = preg_replace_callback("/\{([^}]+)\}/", $replacement,$tin) ;
            $akat1 = "{pengadaan|undangan|permohonan|perbaikan|masalah}";
            $rand_kat1 = preg_replace_callback("/\{([^}]+)\}/", $replacement,$akat1) ;
            $akat2 = "{inventaris|website|data}";
            $rand_kat2 = preg_replace_callback("/\{([^}]+)\}/", $replacement,$akat2) ;
            $sifat = "{Segera|Sangat Segera|Rahasia}";
            $sifat_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $sifat);
            $ket = "{masuk|keluar}";
            $ket_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $ket);
            $file = "{E-Perpustakaan  User_1|AdminLTE 3  DataTables|LP_S}";
            $file_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $file); 
            $data[] = [
                'surat' => $surat_spin,
                'tgl_surat' => $tahun.'-'.$bulan.'-'.$hari,
                'no_surat' => rand(),
                'tgl_terima' => $tahun.'-'.$bulan.'-'.$hari,
                'no_agenda' => rand(),
                'sifat' => $sifat_spin,
                'terusan' => $rand_ter1.';'.$rand_ter2,
                'tindakan' => $rand_tin1.';'.$rand_tin2,
                'perihal'=>$rand_kat1.' '.$rand_kat2.' '.$surat_spin,
                'catatan'=>$sifat_spin.' mintakan ttd '.$rand_ter1,
                'kat1' => $rand_kat1,
                'kat2' => $rand_kat2,
                'ket' => $ket_spin,
                'file' => $file_spin,
                'id_user' => array_rand($user_ids)+1,
                'created_at' => date('Y-m-d H:i:s'),         
            ];
        }  

        $this->db->table('tb_surat')->insertBatch($data);
    }
}
