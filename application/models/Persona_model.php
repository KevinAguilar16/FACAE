<?php
class Persona_model extends CI_model {

	function lista_persona(){
		 $persona= $this->db->get('persona');
		 return $persona;
	}




	function persona( $id){
		$persona = $this->db->query('select * from persona where idpersona="'. $id.'"');
		return $persona;
	}

	function save($array)
	{
	   $this->db->insert("persona", $array);
	}

	function update($id,$array_item)
	{
		$this->db->where('idpersona',$id);
		$this->db->update('persona',$array_item);
   }




}
