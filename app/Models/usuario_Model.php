<?php

namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'id_bandera', 'created_at'];


    public function __construct(){
        parent::__construct();
    }

    public function eliminar($id){
        $usuario = $this->db->table('usuarios');
        $usuario->set('id_bandera', 2);
        return $usuario->where('id_usuario', $id)->update();
    }
    

} 
  

