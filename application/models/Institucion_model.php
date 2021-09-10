<?php
class Institucion_model extends CI_model {

	function lista_institucion(){
		 $institucion= $this->db->get('institucion');
		 return $institucion;
	}

 	function institucion( $id){
 		$institucion = $this->db->query('select * from institucion where idinstitucion="'. $id.'"');
 		return $institucion;
 	}

 	function save($array)
 	{
		$this->db->insert("institucion", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idinstitucion',$id);
 		$this->db->update('institucion',$array_item);
	}
 

}
