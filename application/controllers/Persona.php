<?php

class Persona extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('persona_model');
}

public function index(){
  $data['persona']=$this->persona_model->persona(6)->row_array();
 // print_r($data['persona_list']);
  $data['title']="Lista de Persona";
	$this->load->view('template/page_header');		
  $this->load->view('persona_record',$data);
	$this->load->view('template/page_footer');
}








public function add()
{
		$data['personas']= $this->persona_model->lista_persona()->result();
		$data['title']="Nueva Persona";
	 	$this->load->view('template/page_header');		
	 	$this->load->view('persona_form',$data);
	 	$this->load->view('template/page_footer');


}


	public function  save()
	{
	 	$array_item=array(
		 	
		 	'idpersona' => $this->input->post('idpersona'),
      'cedula' => $this->input->post('cedula'),
		 	'nombres' => $this->input->post('nombres'),
			'apellidos' => $this->input->post('apellidos'),
	 	);
	 	$this->persona_model->save($array_item);
	 	redirect('persona');
 	}



public function edit()
{
	 	$data['persona'] = $this->persona_model->persona($this->uri->segment(3))->row_array();
 	 	$data['title'] = "Actualizar Persona";
 	 	$this->load->view('template/page_header');		
 	 	$this->load->view('persona_edit',$data);
	 	$this->load->view('template/page_footer');
 
}


	public function  save_edit()
	{
		$id=$this->input->post('idpersona');
	 	$array_item=array(
		 	
		 	'idpersona' => $this->input->post('idpersona'),
		 	'cedula' => $this->input->post('cedula'),
     'nombres' => $this->input->post('nombres'),
		 	'apellidos' => $this->input->post('apellidos')
	 	);
	 	$this->persona_model->update($id,$array_item);
	 	redirect('persona');
 	}



}
