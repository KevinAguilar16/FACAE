<?php
class Persona_model extends CI_model {

	function listar_persona(){
		 $persona= $this->db->get('persona');
		 return $persona;
	}




}
