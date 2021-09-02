<?php
class Documento_model extends CI_model {

	function listar_documentos(){
		 $documento= $this->db->get('documento');
		 return $documento;
	}

 	function documento( $id){
 		$documento = $this->db->query('select * from documento where iddocumentos="'. $id.'"');
 		return $documento;
 	}

 	function save($array)
 	{
		$this->db->insert("documento", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('iddocumentos',$id);
 		$this->db->update('documento',$array_item);
	}
 

}
