<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kat2 extends Seeder
{
    public function run()
    {
        $replacement = function ($matches) {
            $array = explode("|", $matches[1]);
            return $array[array_rand($array)];
        };

        // build random data
        $data = [];
        for ($i=0; $i < 3 ; $i++) { 
            $kat2 = "{website|data|inventaris}";
            $kat2_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $kat2);
            $data[] = [
               'kat2'=>$kat2_spin,        
            ];
        }  

        $this->db->table('tb_kat2')->insertBatch($data);
    }
}