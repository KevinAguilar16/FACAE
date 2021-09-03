<?php

class Usuario extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('usuario_model');
      $this->load->model('persona_model');
      $this->load->model('perfil_model');
}

public function index(){
  $data['usuario_list']=$this->usuario_model->listar_usuarios1()->result();
 // print_r($data['usuario_list']);
  $data['title']="LIsta de Usuarios";
	$this->load->view('template/page_header');		
  $this->load->view('usuario_list',$data);
	$this->load->view('template/page_footer');
}


public function add()
{
		$data['personas']= $this->persona_model->lista_persona()->result();
		$data['perfiles']= $this->perfil_model->lista_perfil()->result();
		$data['title']="Nuevo Usuario";
	 	$this->load->view('template/page_header');		
	 	$this->load->view('usuario_form',$data);
	 	$this->load->view('template/page_footer');


}


	public function  save()
	{
	 	$array_item=array(
		 	'password' => $this->input->post('password'),
		 	'idpersona' => $this->input->post('idpersona'),
		 	'idperfil' => $this->input->post('idperfil'),
		 	'email' => $this->input->post('email'),
	 	);
	 	$this->usuario_model->save($array_item);
	 	redirect('usuario');
 	}



public function edit()
{
	 	$data['usuario'] = $this->usuario_model->usuario($this->uri->segment(3))->row_array();
		$data['personas']= $this->persona_model->lista_persona()->result();
		$data['perfiles']= $this->perfil_model->lista_perfil()->result();
 	 	$data['title'] = "Actualizar Persona";
 	 	$this->load->view('template/page_header');		
 	 	$this->load->view('usuario_edit',$data);
	 	$this->load->view('template/page_footer');
 
}


	public function  save_edit()
	{
		$id=$this->input->post('idusuario');
	 	$array_item=array(
		 	'password' => $this->input->post('password'),
		 	'idpersona' => $this->input->post('idpersona'),
		 	'idperfil' => $this->input->post('idpefil'),
		 	'email' => $this->input->post('email'),
	 	);
	 	$this->usuario_model->update($id,$array_item);
	 	redirect('usuario');
 	}





}
