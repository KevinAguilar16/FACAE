<?php
class Persona_model extends CI_model {

	function lista_persona(){
		 $persona= $this->db->get('persona');
		 return $persona;
	}




}
