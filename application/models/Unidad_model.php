<?php
class Unidad_model extends CI_model {

	function lista_unidad(){
		 $unidad= $this->db->get('unidad');
		 return $unidad;
	}

 	function unidad( $id){
 		$unidad = $this->db->query('select * from unidad where idunidad="'. $id.'"');
 		return $unidad;
 	}

 	function save($array)
 	{
		$this->db->insert("unidad", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idunidad',$id);
 		$this->db->update('unidad',$array_item);
	}
 

}
