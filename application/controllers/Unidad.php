<?php

class Unidad extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('unidad_model');
	  $this->load->model('institucion_model');
}

public function index(){

  	$data['unidad']=$this->unidad_model->unidad(1)->row_array();
  	$data['instituciones']= $this->institucion_model->lista_institucion()->result();
  
 // print_r($data['usuario_list']);
 	 $data['title']="Lista de Unidades";
	$this->load->view('template/page_header');		
 	 $this->load->view('unidad_record',$data);
	$this->load->view('template/page_footer');
}


public function add()
{
		$data['instituciones']= $this->institucion_model->lista_institucion()->result();
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
			'idinstitucion' => $this->input->post('idinstitucion'),
	 	);
	 	$this->unidad_model->save($array_item);
	 	redirect('unidad');
 	}



public function edit()
{
	 	$data['unidad'] = $this->unidad_model->unidad($this->uri->segment(3))->row_array();
 	 	$data['title'] = "Actualizar Unidad";
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
