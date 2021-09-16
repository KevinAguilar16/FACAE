<?php
class Ordenador_model extends CI_model {

	function lista_ordenador(){
		 $ordenador= $this->db->get('ordenador');
		 return $ordenador;
	}

 	function ordenador( $id){
 		$ordenador = $this->db->query('select * from ordenador where idordenador="'. $id.'"');
 		return $ordenador;
 	}

 	function save($array)
 	{
		$this->db->insert("ordenador", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idordenador',$id);
 		$this->db->update('ordenador',$array_item);
	}
 

}
