<?php
class Destinatario_model extends CI_model {

	function listar_destinatario(){
		 $destinatario= $this->db->get('destinatario');
		 return $destinatario;
	}

	function listar_destinatario1(){
		 $destinatario= $this->db->get('destinatario1');
		 return $destinatario;
	}




 	function usuario( $id){
 		$usuario = $this->db->query('select * from usuario where idusuario="'. $id.'"');
 		return $usuario;
 	}

 	function save($array)
 	{
		$this->db->insert("destinatario", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idusuario',$id);
 		$this->db->update('usuario',$array_item);
	}
 

}
