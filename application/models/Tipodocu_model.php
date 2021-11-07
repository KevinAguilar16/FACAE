<?php
class Tipodocu_model extends CI_model {

	function lista_tipodocu(){
		 $tipodocu= $this->db->get('tipodocu');
		 return $tipodocu;
	}

 	function tipodocu( $id){
 		$tipodocu = $this->db->query('select * from tipodocu where idtipodocu="'. $id.'"');
 		return $tipodocu;
 	}

 	function save($array)
 	{
		$this->db->insert("tipodocu", $array);
 	}

 	function update($id,$array_item)
 	{
 		$this->db->where('idtipodocu',$id);
 		$this->db->update('tipodocu',$array_item);
	}
 

}
