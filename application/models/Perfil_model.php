<?php
class Perfil_model extends CI_model {

	function listar_perfiles(){
		 $perfil= $this->db->get('perfil');
		 return $perfil;
	}

 	function perfil( $id){
 		$perfil = $this->db->query('select * from perfil where idperfil="'. $id.'"');
 		return $perfil;
 	}

 	function save($array)
 	{
		$this->db->insert("perfil", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idperfil',$id);
 		$this->db->update('perfil',$array_item);
	}
 

}
