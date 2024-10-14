<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kat1 extends Seeder
{
    public function run()
    {
        $replacement = function ($matches) {
            $array = explode("|", $matches[1]);
            return $array[array_rand($array)];
        };

        // build random data
        $data = [];
        for ($i=0; $i < 5 ; $i++) { 
            $kat1 = "{permohonan|perbaikan|masalah|pengadaan|undangan}";
            $kat1_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $kat1);
            $data[] = [
               'kat1'=>$kat1_spin,        
            ];
        }  

        $this->db->table('tb_kat1')->insertBatch($data);
    }
}

