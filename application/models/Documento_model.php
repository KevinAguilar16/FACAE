<?php
class Documento_model extends CI_model {

	function lista_documento(){
		 $documento= $this->db->get('documento');
		 return $documento;
	}

 	function documento( $id){
 		$documento = $this->db->query('select * from documento where iddocumento="'. $id.'"');
 		return $documento;
 	}

 	function save($array)
 	{
		$this->db->insert("documento", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('iddocumento',$id);
 		$this->db->update('documento',$array_item);
	}
 

}
