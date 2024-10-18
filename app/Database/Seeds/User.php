<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $replacement = function ($matches) {
            $array = explode("|", $matches[1]);
            return $array[array_rand($array)];
        };

        // build random data
        $data = [];
        for ($i=1; $i <= 20 ; $i++) { 
            $nama = "{roma|nita|zahra|redo}";
            $nama_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $nama);
            $username_spin = $nama_spin.$i;
            $nip=rand();
            $t_lhr = "{cilacap|banyumas|banjarnegara|purbalingga}";
            $t_lhr_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $t_lhr);
            $bidang = "{A|B|C|D}";
            $bidang_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $bidang); 
            $jabatan = "{Kepala|Manajer|Wakil|Staff}";
            $jabatan_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $jabatan); 
            $level = "{Admin|User}";
            $level_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $level); 
            $status = "{aktif|nonaktif}";
            $status_spin = preg_replace_callback("/\{([^}]+)\}/", $replacement, $status); 
            $data[] = [
                'foto' => 'avatar'.rand(1,5).'.png',
                'username' => $username_spin,
                'password' => password_hash(1234, PASSWORD_DEFAULT),
                'nama' => $nama_spin,
                'nip' => $nip,
                'jabatan' => $jabatan_spin,
                'bidang' => $bidang_spin,
                'tempat_lahir' => $t_lhr_spin,
                'tgl_lahir' => date('Y-m-d'),   
                'email' => $username_spin.'@gmail.com',
                'level' => $level_spin,
                'status' => $status_spin,
                'created_at' => date('Y-m-d H:i:s'),         
            ];
        }  

        $this->db->table('tb_user')->insertBatch($data);
    }
}
