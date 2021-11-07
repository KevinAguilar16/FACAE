</div>
<script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}

function mostrar() {
    document.getElementById("sidebar").style.width = "10%";
  
document.getElementById("eys-principal").style.width="90%";
//  document.getElementById("eys-contenido-g").style.marginLeft = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
    document.getElementById("INS").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/institucion.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Institución";
    document.getElementById("UNI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/unidad.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Unidad";
    document.getElementById("DEP").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/departamento.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Departamento";
    document.getElementById("ORD").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/ordenador.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Ordenador";
    document.getElementById("DIR").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/directorio.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Directorio";
    document.getElementById("MTI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/usuario.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Usuarios";
    document.getElementById("MAE").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/maestrante.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Maestrante";
    document.getElementById("MCA").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/persona.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Personas";
    document.getElementById("MFI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/perfil.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Perfil";
    document.getElementById("PAR").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/participante.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Participante";
    document.getElementById("TDO").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/tipodocu.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Tipo Docu";
    document.getElementById("MGA").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/documento.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Documento";
    document.getElementById("MEM").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/emisor.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Emisor";
    document.getElementById("MMD").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/destinatario.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Destinatario";
    document.getElementById("INF").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/informes.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Informes";
    document.getElementById("EVE").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/evento.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Eventos";
    document.getElementById("COR").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/correo.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Correo";
    document.getElementById("TEL").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/telefono.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Telefono";
    document.getElementById("EVA").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/evaluacion.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Evaluación";
    document.getElementById("PRE").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/pregunta.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Pregunta";
    document.getElementById("RES").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/respuesta.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Respuesta";
    document.getElementById("EVD").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/evaluado.jpg\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Evaluado";
    document.getElementById("RES").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/resultado.png\" wide=\"50\" height=\"50\" alt=\"Formget logo\"> - Resultado";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "5%";
document.getElementById("eys-principal").style.width="95%";
  //  document.getElementById("eys-contenido-g").style.marginLeft = "5%";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";


    document.getElementById("INS").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/institucion.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("UNI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/unidad.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("DEP").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/departamento.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("ORD").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/ordenador.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("DIR").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/directorio.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MTI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/usuario.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MAE").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/maestrante.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MCA").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/persona.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MFI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/perfil.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("PAR").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/participante.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("TDO").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/tipodocu.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MGA").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/documento.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MEM").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/emisor.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MMD").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/destinatario.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("INF").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/informes.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("EVE").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/evento.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("COR").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/correo.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("TEL").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/telefono.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("EVA").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/evaluacion.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("PRE").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/pregunta.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("RES").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/respuesta.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("EVD").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/evaluado.jpg\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("RES").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/resultado.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
   // document.getElementById("MEM").innerHTML="7.-MEM";
   // document.getElementById("MMD").innerHTML="8.-MMD";
   // document.getElementById("MEE").innerHTML="9.-MEE";
   // document.getElementById("MLI").innerHTML="10.-MLI";
  //  document.getElementById("MDP").innerHTML="11.-MDP";
}

document.getElementById("eys-principal").style.width="95%";
</script>


<!-- Footer -->
<!------------
<div  id="eys-footer" >

<div >

<div>
    <p><b>Conocenos</b></p>
      <ul>
          <li>Mapa del sitio</li>
          <li>Contactanos</li>
          <li>Política de privacidad</li>
          <li><a href="https://www.facebook.com/UniversidadTecnicaLuisVargasTorres"><i class="fa fa-facebook" style="font-size:24px"></i></a> &nbsp; <a href="http://localhost/SICAPG/documentos/PROTOCOLO.pdf"><i class="fa fa-twitter" style="font-size:24px"></i></a> &nbsp;  <a href="https://www.facebook.com/UniversidadTecnicaLuisVargasTorres"><i class="fa fa-youtube" style="font-size:24px"></i></a>    </li>
      </ul>
</div>

<div style="text-align:center; vertical-align: middle;">
<a href=" <?php echo base_url(); ?>index.php/Principal"> <img src="<?php echo base_url(); ?>images/logo.png" width=100vw; height=100vh; alt="Formget logo"></a> 

</div>

      <div> 
        <p><b>Creadores</b></p>
         <ul style="margin:0; padding:0;" class="copyright"> 
            <li><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/educaysoft/index.php">EDUCAYSOFT</a></li> 
              <li> Universidad Técnica Luis Varga Torres</li>   
              <li>Agradecimiento</li>
              <li>Trabaja con nosotros</li>
          </ul>           
      </div>       
</div>
</div>
---->


</div>
<!-- Footer -->

</body>

</html>
