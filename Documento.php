<?php

class Documento extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('documento_model');
}

public function index(){
  $data['documento_list']=$this->documento_model->listar_documentos()->result();
 // print_r($data['usuario_list']);
  $data['title']="LIsta de Documentos";
	$this->load->view('template/page_header');		
  $this->load->view('documento_list',$data);
	$this->load->view('template/page_footer');
}


public function add()
{
		$data['title']="Nuevo Documento";
	 	$this->load->view('template/page_header');		
	 	$this->load->view('documento_form',$data);
	 	$this->load->view('template/page_footer');


}


	public function  save()
	{
	 	$array_item=array(
		 	
		 	'iddocumentos' => $this->input->post('iddocumentos'),
		 	'archivopdf' => $this->input->post('archivopdf'),
		 	'asunto' => $this->input->post('asunto'),
			'fechaelaboracion' => $this->input->post('fechaelaboracion'),
			'fechaentrerecep' => $this->input->post('fechaentrerecep'),
			'observacion' => $this->input->post('observacion'),
	 	);
	 	$this->documento_model->save($array_item);
	 	redirect('documento');
 	}



public function edit()
{
	 	$data['documento'] = $this->documento_model->documento($this->uri->segment(3))->row_array();
 	 	$data['title'] = "Actualizar Documento";
 	 	$this->load->view('template/page_header');		
 	 	$this->load->view('documento_edit',$data);
	 	$this->load->view('template/page_footer');
 
}


	public function  save_edit()
	{
		$id=$this->input->post('iddocumentos');
	 	$array_item=array(
		 	
			'iddocumentos' => $this->input->post('iddocumentos'),
			'archivopdf' => $this->input->post('archivopdf'),
			'asunto' => $this->input->post('asunto'),
		    'fechaelaboracion' => $this->input->post('fechaelaboracion'),
		    'fechaentrerecep' => $this->input->post('fechaentrerecep'),
		    'observacion' => $this->input->post('observacion'),
	 	);
	 	$this->documento_model->update($id,$array_item);
	 	redirect('documento');
 	}





}
