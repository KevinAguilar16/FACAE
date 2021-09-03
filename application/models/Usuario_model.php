<?php
class Usuario_model extends CI_model {

	function listar_usuarios(){
		 $usuario= $this->db->get('usuario');
		 return $usuario;
	}

	function listar_usuarios1(){
		 $usuario= $this->db->get('usuario1');
		 return $usuario;
	}




 	function usuario( $id){
 		$usuario = $this->db->query('select * from usuario where idusuario="'. $id.'"');
 		return $usuario;
 	}

 	function save($array)
 	{
		$this->db->insert("usuario", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idusuario',$id);
 		$this->db->update('usuario',$array_item);
	}
 

}
