<?php
class Emisor_model extends CI_model {

	function listar_emisor(){
		 $emisor= $this->db->get('emisor');
		 return $emisor;
	}

	function listar_emisor1(){
		 $emisor= $this->db->get('emisor1');
		 return $emisor;
	}




 	function usuario( $id){
 		$usuario = $this->db->query('select * from usuario where idusuario="'. $id.'"');
 		return $usuario;
 	}

 	function save($array)
 	{
		$this->db->insert("emisor", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idusuario',$id);
 		$this->db->update('usuario',$array_item);
	}
 

}
