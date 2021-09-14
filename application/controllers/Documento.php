<?php

class Documento extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('documento_model');
}

public function index(){
 // $data['documento_list']=$this->documento_model->lista_documento()->result();
  $data['documento'] = $this->documento_model->documento(1)->row_array();
  $data['emisores'] =$this->documento_model->emisores(1)->result();
  $data['destinatarios'] = $this->documento_model->destinatarios(1)->result();
 // print_r($data['usuario_list']);
  $data['title']="Documento";
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
		 	
		 	'iddocumento' => $this->input->post('iddocumento'),
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



public function canvas(){
	$this->load->view('template/page_header');
	$this->load->view('canvas');
	$this->load->view('template/page_footer');
}

function postulacion() {
 $this->load->view('template/page_header');
 $data['blog_text'] = "POSTULACION"; 
 $this->load->view('postulacion',$data);
 $this->load->view('template/page_footer'); 
 }



 function loadpdf() {
  echo "Hola  -  ";
$target_dir =  $_SERVER["DOCUMENT_ROOT"]."/SICAPG/".trim($this->session->userdata['logged_in']['pdf']);  //"uploads/";
$target_file =$target_dir; // $target_dir . basename($_FILES["fileToUpload"]["name"]);
  echo $target_file.' - ';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  echo "-".$imageFileType;
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
 */
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "pdf" && $imageFileType != "pdf" && $imageFileType != "pdf"
&& $imageFileType != "pdf" ) {
  echo $imageFileType;
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	echo "----".$_FILES["fileToUpload"]["tmp_name"];
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}







}
