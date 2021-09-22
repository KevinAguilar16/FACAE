<?php

class Ordenador extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('ordenador_model');
}

public function index(){
  $data['ordenador']=$this->ordenador_model->ordenador(1)->row_array();
 // print_r($data['usuario_list']);
  $data['title']="Lista de ordenadores";
        if(isset($dat['ordenador'])){
	$this->load->view('template/page_header');
	$this->load->view('ordenador_record',$data);
	$this->load->view('template/page_footer');
	}else{
        echo "no hay registro";
}		
 
}


public function add()
{
		$data['title']="Nueva ordenador";
	 	$this->load->view('template/page_header');		
	 	$this->load->view('ordenador_form',$data);
	 	$this->load->view('template/page_footer');


}


	public function  save()
	{
	 	$array_item=array(
		 	
		 	'idordenador' => $this->input->post('idordenador'),
		 	'nombre' => $this->input->post('nombre'),
	 	);
	 	$this->ordenador_model->save($array_item);
	 	redirect('ordenador');
 	}



public function edit()
{
	 	$data['ordenador'] = $this->ordenador_model->ordenador($this->uri->segment(3))->row_array();
 	 	$data['title'] = "Actualizar ordenador";
 	 	$this->load->view('template/page_header');		
 	 	$this->load->view('ordenador_edit',$data);
	 	$this->load->view('template/page_footer');
 
}


	public function  save_edit()
	{
		$id=$this->input->post('idordenador');
	 	$array_item=array(
		 	
		 	'idordenador' => $this->input->post('idordenador'),
		 	'nombre' => $this->input->post('nombre'),
	 	);
	 	$this->ordenador_model->update($id,$array_item);
	 	redirect('ordenador');
 	}





}
