<?php

class Institucion extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('institucion_model');
}

public function index(){
  $data['institucion_list']=$this->institucion_model->lista_institucion()->result();
 // print_r($data['usuario_list']);
  $data['title']="Lista de Instituciones";
	$this->load->view('template/page_header');		
  $this->load->view('institucion_list',$data);
	$this->load->view('template/page_footer');
}


public function add()
{
		$data['title']="Nueva Institución";
	 	$this->load->view('template/page_header');		
	 	$this->load->view('institucion_form',$data);
	 	$this->load->view('template/page_footer');


}


	public function  save()
	{
	 	$array_item=array(
		 	
		 	'idinstitucion' => $this->input->post('idinstitucion'),
		 	'nombre' => $this->input->post('nombre'),
	 	);
	 	$this->institucion_model->save($array_item);
	 	redirect('institucion');
 	}



public function edit()
{
	 	$data['institucion'] = $this->institucion_model->institucion($this->uri->segment(3))->row_array();
 	 	$data['title'] = "Actualizar Institucion";
 	 	$this->load->view('template/page_header');		
 	 	$this->load->view('institucion_edit',$data);
	 	$this->load->view('template/page_footer');
 
}


	public function  save_edit()
	{
		$id=$this->input->post('idinstitucion');
	 	$array_item=array(
		 	
		 	'idinstitucion' => $this->input->post('idinstitucion'),
		 	'nombre' => $this->input->post('nombre'),
	 	);
	 	$this->institucion_model->update($id,$array_item);
	 	redirect('institucion');
 	}





}
