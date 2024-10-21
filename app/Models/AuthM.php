<?php namespace App\Models;

use CodeIgniter\Model;


class AuthM extends Model {

    protected $table = 'tb_login';
    protected $primaryKey = 'id_login';
    protected $allowedFields = [];

    // getUser
   public function getUser($user)
   {
       $builder = $this->db->table('tb_user');
       return $builder->getWhere([
        'username'=>$user,
    ]);
   }

   // detail
   public function detail($username)
   {
       return $this->db->table('tb_user')
       ->select('*')
       ->where('username',$username)
       ->get()->getRow();
   }

    public function login($user){
        return $this->db->table('tb_user')->where([
            'username'=>$user,
        ])->get()->getRowArray();
    }
}

 ?>