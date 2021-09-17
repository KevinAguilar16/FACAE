<?php

class Tipodocu extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('tipodocu_model');
}

public function index(){
  $data['tipodocu_list']=$this->tipodocu_model->lista_tipodocu()->result();
 // print_r($data['usuario_list']);
  $data['title']="Tipos de documentos";
	$this->load->view('template/page_header');		
  $this->load->view('tipodocu_list',$data);
	$this->load->view('template/page_footer');
}


public function add()
{
		$data['title']="Nueva Tipo de documento";
	 	$this->load->view('template/page_header');		
	 	$this->load->view('tipodocu_form',$data);
	 	$this->load->view('template/page_footer');


}


	public function  save()
	{
	 	$array_item=array(
		 	
		 	'idtipodocu' => $this->input->post('idtipodocu'),
		 	'descripcion' => $this->input->post('descripcion'),
	 	);
	 	$this->tipodocu_model->save($array_item);
	 	redirect('tipodocu');
 	}



public function edit()
{
	 	$data['tipodocu'] = $this->tipodocu_model->tipodocu($this->uri->segment(3))->row_array();
 	 	$data['title'] = "Actualizar tipodocu";
 	 	$this->load->view('template/page_header');		
 	 	$this->load->view('tipodocu_edit',$data);
	 	$this->load->view('template/page_footer');
 
}


	public function  save_edit()
	{
		$id=$this->input->post('idtipodocu');
	 	$array_item=array(
		 	
		 	'idtipodocu' => $this->input->post('idtipodocu'),
		 	'descripcion' => $this->input->post('descripcion'),
	 	);
	 	$this->tipodocu_model->update($id,$array_item);
	 	redirect('tipodocu');
 	}





}
