<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
//header("location: http://localhost/CodeIgniter2/index.php/user_authentication/user_login_process");
}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Alex Brush' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!---- Para manejar el datatable -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>

<!----Para la linea de tiempl --->
<style>

* {
  box-sizing: border-box;
}

/* Set a background color */
.mytime {
  font-family: Helvetica, sans-serif;
  margin:3px;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 50%;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: #8d8d8d;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 5px 5px;
  position: relative;
  background-color: inherit;
  width: 100%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -33px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 18px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: -55%;
}

/* Place the container to the right */
.right {
  left:55%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 7px;
  border: medium solid #8d8d8d;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent #8d8d8d;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 5px;
  border: medium solid #d8d8d8;
  border-width: 10px 10px 10px 0;
  border-color: transparent #8d8d8d transparent transparent;
}


/* Fix the circle for containers on the right side */
.right::after {
  left: -33px;
}

/* The actual content */
.content {
  padding: 5px 5px;
  background-color: white;
  position: relative;
  border-radius: 6px;
  border: 1px solid #d8d8d8;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 100px) {
/* Place the timelime to the left */
  .timeline::after {
    left: 10px;
  }

/* Full-width containers */
  .container {
    width: 100%;
    padding-left: 20px;
    padding-right: 25px;
  }

/* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 30px;
    border: medium solid #8d8d8d;
    border-width: 5px 5px 5px 0;
    border-color:  #8d8d8d ;
  }

/* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }

/* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}

.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

#menu {
    width: 550px;
    height: 35px;
    font-size: 16px;
    font-family: Tahoma, Geneva, sans-serif;
    font-weight: bold;
    text-align: right;
    text-shadow: 3px 2px 3px #333333;
    border-radius: 8px;
}


#menu ul {
    height: auto;
    padding: 8px 0px;
    margin: 0px;
}

#menu li {
display: inline;
padding: 20px;
}



#menu a {
    text-decoration: none;
    color: #00F;
    padding: 8px 8px 8px 8px;
}



menu a:hover {
    color: #F90;
    background-color: #FFF;
}



.isDisabled {
  color: currentColor;
  cursor: not-allowed;
  opacity: 0.5;
  text-decoration: none;
}



</style>


<!--- Para el menu de las materias como acordion -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





<script>

function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace("w3-green", "w3-red");
  } else { 
    x.className = x.className.replace(" w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace("w3-red", "w3-green");
  }
}
</script>




<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway'/>


<script  type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.js"></script>
<script  type="text/javascript" src="<?php echo base_url(); ?>assets/jquery.min.js"></script>




<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-3.4.1-dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-3.4.1-dist/css/bootstrap.min.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-3.4.1-dist/css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap-3.4.1-dist/css/bootstrap-theme.css" />

<!------ <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/educaysoft/eys-css/main/eys-style.css"/> --->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/eys-style.css" />   

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/eys.css" />   
<!---- <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/eys.css" />  ----> 

<script  type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap-3.4.1-dist/js/bootstrap.js" ></script>
<script  type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap-3.4.1-dist/js/bootstrap.min.js" ></script>




<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables-1.10.21/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables-1.10.21/css/dataTables.bootstrap4.css" />


<script  type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables-1.10.21/js/jquery.dataTables.min.js" ></script>
<script  type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables-1.10.21/js/jquery.dataTables.js" ></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables-1.10.21/css/jquery.dataTables.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables-1.10.21/css/jquery.dataTables.css" />


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"/>


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/stylechat.css" />

<!---para cargar pdf---->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>

<style type="text/css">

body{
	font-family: Lato,Helvetica,Arial,sans-serif; 
	font-size:1vw;
}

.sidebar{
	position: fixed;
	height: 100%;
	width:5%;
	top:  0;
	left:0;
	z-index: 1;
	background-color: rgba(0,255, 0, 0.3);
	overflow-x:hidden;
	transition: 0.4s;
	padding: 0.5rem 0;
	box-sizing: border-box;
}

.sidebar .boton-cerrar{
	position: absolute;
	top: 0.5rem;
	right: 1rem;
	font-size: 2rem;
	display: block;
	padding: 0;
	line-height: 1.5rem;
	margin: 0;
	height: 32px;
	width: 32px;
	text-align: center;
	vertical-align: top;
}

.sidebar ul, .sidebar li{
	margin:0;
	padding:0;
	list-style:none inside;
}

.sidebar ul {
    margin: 8rem auto;
    display: block;
    width: 80%;
    min-width:200px;
}

.sidebar a {
    display: block;
    font-size: 100%;
    text-decoration: none;
    padding: 4px;
}

.sidebar a:hover{
color: Blue;
  border-bottom: 3px solid Blue;
}

h1 {
    color:#f90;
    font-size:180%;
    font-weight:normal;
}


.eys-simple-sidebar a:hover{

color: Blue;
  border-bottom: 3px solid Blue;

}



.abrir-cerrar{
	color: #2E88C7;
	font-size:1rem;

}

#cerrar{
	display:none;
}

#show-pdf-button {
	width: 150px;
	display: block;
	margin: 20px auto;
}

#file-to-upload {
	display: none;
}

#pdf-main-container {
	width: 500px;
	margin: 20px auto;
}

#pdf-loader {
	display: none;
	text-align: center;
	color: #999999;
	font-size: 13px;
	line-height: 100px;
	height: 100px;
}

#pdf-contents {
  display: none;
}


#pdf-meta {
	overflow: hidden;
	margin: 0 0 20px 0;
}

#pdf-buttons {
	float: left;
}

#page-count-container {
	float: right;
}

#pdf-current-page {
	display: inline;
}

#pdf-total-pages {
	display: inline;
}

#pdf-canvas {
	border: 1px solid rgba(0,0,0,0.2);
	box-sizing: border-box;
}

#page-loader {
	height: 100px;
	line-height: 100px;
	text-align: center;
	display: none;
	color: #999999;
	font-size: 13px;

}

background-color: #008fb3;
  transition: all 0.3s;
  border-radius: 10rem;
  z-index: -1;
}
.button:hover {
  color: #fff;
}
.button:hover:before {
  width: 100%;
}

/* optional reset for presentation */
* {
  font-family: Arial;
  text-decoration: none;
  font-size: 20px;
}

.container {
  padding-top: 50px;
  margin: 0 auto;
  width: 100%;
  text-align: center;
}

h1 {
  text-transform: uppercase;
  font-size: 0.8rem;
  margin-bottom: 2rem;
  color: #777;
}

span {
  display: block;
  margin-top: 2rem;
  font-size: 0.7rem;
  color: #777;
}
span a {
  font-size: 0.7rem;
  color: #999;
  text-decoration: underline;
}


.button {
  display: inline-block;
  padding: 0.75rem 1.25rem;
  border-radius: 10rem;
  color: #fff;
  text-transform: uppercase;
  font-size: 1rem;
  letter-spacing: 0.15rem;
  transition: all 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
}
.button:after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #0cf;
  border-radius: 10rem;
  z-index: -2;
}
.button:before {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 100%;
  background-color: #008fb3;
  transition: all 0.3s;
  border-radius: 10rem;
  z-index: -1;
}
.button:hover {
  color: #fff;
}
.button:hover:before {
  width: 100%;
}

/* optional reset for presentation */
* {
  font-family: Arial;
  text-decoration: none;
  font-size: 20px;
}

.container {
  padding-top: 50px;
  margin: 0 auto;
  width: 100%;
  text-align: center;
}

h1 {
  text-transform: uppercase;
  font-size: 0.8rem;
  margin-bottom: 2rem;
  color: #777;
}

span {
  display: block;
  margin-top: 2rem;
  font-size: 0.7rem;
  color: #777;
}
span a {
  font-size: 0.7rem;
  color: #999;
  text-decoration: underline;
}


</style>

</head>
<body >




<!---<div  style="position:fixed; padding:2px; background-color: rgba(0,255, 0, 0.3); margin-top:0; border-bottom:5px solid green ;z-index: 9999;">-->
<div  style="position:fixed; width: 100%; padding:8px; background-color: #04df8c ; margin-top:0; border-bottom:2px solid green ;z-index: 9999; ">
  
   	<?php if(isset($this->session->userdata['logged_in']) ){ ?>
    		<div class="pull-right">
            <div class="btn-group">
        	  <button class="btn btn-success">
		            <img src= "<?php echo base_url().$this->session->userdata['logged_in']['foto']; ?>" height="100%" class="avatar">
	          </button>

                <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                </button>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url();?>index.php/upfoto">Subir foto</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/portafolio">Tu portafolio</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/login/logout">Salir</a></li>
                        </ul>
            </div>
    	</div>
  
   	<div class="media-left">
        <a id="abrir" class="abrir-cerrar w3-bar-item"  href="javascript:void(0)" onclick="mostrar()"><img src="<?php echo base_url(); ?>images/maestrias1.png" wide="49" height="50" alt="Formget logo"> </a><a id="cerrar" class="abrir-cerrar w3-bar-item" href="#" onclick="ocultar()"><img src="<?php echo base_url(); ?>images/maestrias2.png" wide="49" height="50" alt="Formget logo"> </a>
    		<a href=" <?php echo base_url(); ?>index.php/mti"> <img src="<?php echo base_url(); ?>images/logo.png" wide="80" height="80" alt="Formget logo"></a>  
    </div>    

		<div class="media-left" style=" display:table-cell; vertical-align:middle;"  >
			<h4 > UNIVERSIDAD TÉCNICA LUIS VARGAS TORRES DE ESMERALDAS</h4>
		</div>
 	</div>


  <div id="eys-contenido-g"  style="margin-top: 5vh; ">
    <div id="sidebar" class="sidebar">
        <a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>

 <ul class="menu" >
 <li><a id="INS" style="font-size:80%; color:orange;" href='<?php echo base_url(); ?>index.php/institucion'><img src="<?php echo base_url(); ?>assets/iconos/institucion.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="UNI" style="font-size:80%; color:orange;" href='<?php echo base_url(); ?>index.php/unidad'><img src="<?php echo base_url(); ?>assets/iconos/unidad.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="DEP" style="border-bottom: 1px solid red; font-size:80%; color:orange;" href='<?php echo base_url(); ?>index.php/departamento'><img src="<?php echo base_url(); ?>assets/iconos/departamento.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="ORD" style="font-size:80%; color:orange;" href='<?php echo base_url(); ?>index.php/ordenador'><img src="<?php echo base_url(); ?>assets/iconos/ordenador.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="DIR" style="font-size:80%; color:orange;" href='<?php echo base_url(); ?>index.php/directorio'><img src="<?php echo base_url(); ?>assets/iconos/directorio.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="MTI" style="font-size:80%; color:orange;" href=' <?php echo base_url(); ?>index.php/usuario'><img src="<?php echo base_url(); ?>assets/iconos/usuario.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="MAE" style="font-size:80%; color:orange;" href=' <?php echo base_url(); ?>index.php/maestrante'><img src="<?php echo base_url(); ?>assets/iconos/maestrante.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="MCA" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/persona'><img src="<?php echo base_url(); ?>assets/iconos/persona.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="MFI" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/perfil'><img src="<?php echo base_url(); ?>assets/iconos/perfil.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="PAR" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/participante'><img src="<?php echo base_url(); ?>assets/iconos/participante.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="TDO" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/tipodocu'><img src="<?php echo base_url(); ?>assets/iconos/tipodocu.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="MGA" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/documento'><img src="<?php echo base_url(); ?>assets/iconos/documento.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="MEM" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/emisor'><img src="<?php echo base_url(); ?>assets/iconos/emisor.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="MMD" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/destinatario'><img src="<?php echo base_url(); ?>assets/iconos/destinatario.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="INF" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/informe'><img src="<?php echo base_url(); ?>assets/iconos/informes.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="EVE" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/evento'><img src="<?php echo base_url(); ?>assets/iconos/evento.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="COR" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/correo'><img src="<?php echo base_url(); ?>assets/iconos/correo.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="TEL" style=" border-bottom: 1px solid red;  font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/telefono'><img src="<?php echo base_url(); ?>assets/iconos/telefono.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="EVA" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/evaluacion'><img src="<?php echo base_url(); ?>assets/iconos/evaluacion.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="PRE" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/pregunta'><img src="<?php echo base_url(); ?>assets/iconos/pregunta.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="RES" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/respuesta'><img src="<?php echo base_url(); ?>assets/iconos/respuesta.png" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="EVD" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/evaluado'><img src="<?php echo base_url(); ?>assets/iconos/evaluado.jpg" wide="49" height="50" alt="Formget logo"></a></li>
 <li><a id="RES" style="font-size:0.8vw; color:orange;" href=' <?php echo base_url(); ?>index.php/resultado'><img src="<?php echo base_url(); ?>assets/iconos/resultado.png" wide="49" height="50" alt="Formget logo"></a></li>

</ul>


</div>
















<?php }else { ?>
    <div class="pull-right">
 		<div  style="diplay:table-cell; vertical-align: middle;">
			<div class= "w3-bar" > 
				<a href= "<?php echo base_url(); ?>index.php/login/user_registration_show" class= "abrir-cerrar w3-bar-item  w3-border-green w3-border-right"> Registrate</a>
				<a href= "<?php echo base_url(); ?>index.php/login" class= "abrir-cerrar w3-bar-item"> Entrar</a>
			</div> 
   	</div>
    </div>
  
   	<div class="media-left">
        <a id="abrir" class="abrir-cerrar w3-bar-item"  href="javascript:void(0)" onclick="mostrar()"><img src="<?php echo base_url(); ?>images/maestrias1.png" wide="49" height="50" alt="Formget logo"> </a><a id="cerrar" class="abrir-cerrar w3-bar-item" href="#" onclick="ocultar()"><img src="<?php echo base_url(); ?>images/maestrias2.png" wide="49" height="50" alt="Formget logo"> </a>
    		<a href=" <?php echo base_url(); ?>index.php/mti"> <img src="<?php echo base_url(); ?>images/logo.png" wide="80" height="80" alt="Formget logo"></a>  
    </div>    

		<div class="media-left" style=" display:table-cell; vertical-align:middle;"  >
			<h4 > UNIVERSIDAD TÉCNICA LUIS VARGAS TORRES DE ESMERALDAS</h4>
		</div>
 	</div>


  <div id="eys-contenido-g"  style="margin-top: 5vh; ">



<?php } ?>




   
<div id="eys-principal"  style="height=100hw; width:100%; float:right;  vertical-align:top; padding-bottom:2.5em; margin:10vh 0vh auto; position:relative;">






