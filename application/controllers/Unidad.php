<?php

class Unidad extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('unidad_model');
}

public function index(){
  $data['unidad_list']=$this->unidad_model->lista_unidad()->result();
 // print_r($data['usuario_list']);
  $data['title']="Lista de Unidades";
	$this->load->view('template/page_header');		
  $this->load->view('unidad_list',$data);
	$this->load->view('template/page_footer');
}


public function add()
{
		$data['title']="Nueva Unidad";
	 	$this->load->view('template/page_header');		
	 	$this->load->view('unidad_form',$data);
	 	$this->load->view('template/page_footer');


}


	public function  save()
	{
	 	$array_item=array(
		 	
		 	'idunidad' => $this->input->post('idunidad'),
		 	'nombre' => $this->input->post('nombre'),
	 	);
	 	$this->unidad_model->save($array_item);
	 	redirect('unidad');
 	}



public function edit()
{
	 	$data['unidad'] = $this->unidad_model->unidad($this->uri->segment(3))->row_array();
 	 	$data['title'] = "Actualizar Persona";
 	 	$this->load->view('template/page_header');		
 	 	$this->load->view('unidad_edit',$data);
	 	$this->load->view('template/page_footer');
 
}


	public function  save_edit()
	{
		$id=$this->input->post('idunidad');
	 	$array_item=array(
		 	
		 	'idunidad' => $this->input->post('idunidad'),
		 	'nombre' => $this->input->post('nombre'),
	 	);
	 	$this->unidad_model->update($id,$array_item);
	 	redirect('unidad');
 	}





}
