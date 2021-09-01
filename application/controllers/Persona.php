<?php

class Persona extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('persona_model');
}

public function index(){
  $data['persona_list']=$this->persona_model->listar_persona()->result();
 // print_r($data['persona_list']);
  $data['title']="LIsta de Persona";
	$this->load->view('template/page_header');		
  $this->load->view('persona_list',$data);
	$this->load->view('template/page_footer');
}


}
