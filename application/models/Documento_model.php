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


	function emisores( $iddocu)
	{
 		$this->db->select('idpersona,nombres');
		$this->db->where('iddocumento="'.$iddocu.'"');
		$emisores=$this->db->get('emisor1');
		$emisores=$this->db->query('select idpersona,nombres from emisor1 where iddocumento="'. $iddocu.'"');
		return $emisores;
	}



	function destinatarios( $iddocu)
	{
		$destinatarios=$this->db->query('select idpersona,nombres from destinatario1 where iddocumento="'. $iddocu.'"');
		return $destinatarios;
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
