<?php namespace App\Models;

use CodeIgniter\Model;


class UserM extends Model {

    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [];

    public function getUser(){
        return $this->db->table('tb_user')
        ->get()->getResultArray();
    }

   // detail
   public function detail($id_user)
   {
       return $this->db->table('tb_user')
       ->select('tb_user.*')
       ->where('tb_user.id_user',$id_user)
       ->Get()->getRowArray();
   }

    // tambah
    public function tambah($data)
    {
        $builder = $this->db->table('tb_user');
        $builder->insert($data);
    }

    // tambah
    public function edit($data)
    {
        $builder = $this->db->table('tb_user');
        $builder->where('id_user',$data['id_user']);
        $builder->update($data);
    }
}

 ?>