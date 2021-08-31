</div>
<script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}

function mostrar() {
    document.getElementById("sidebar").style.width = "500px";
  //  document.getElementById("eys-contenido-g").style.marginLeft = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
    document.getElementById("MTI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/usuario.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Usuarios";
    document.getElementById("MCA").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/persona.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Personas";
    document.getElementById("MFI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/perfil.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\"> - Perfil";
    document.getElementById("MAG").innerHTML="4.-Maestría en Agronomía,Mención Producción Agrícola Sotenible";
    document.getElementById("MGA").innerHTML="5.-Maestría en Gestión Ambiental";
    document.getElementById("MEM").innerHTML="6.-Maestría en Educación, Mención en Enseñanza de la Matemática";
    document.getElementById("MMD").innerHTML="7.-Maestría en Matemática, Mención Modelación y Docencia";
    document.getElementById("MEE").innerHTML="8.-Maestría en Mecánica, Mención en Eficiencia Energética";
    document.getElementById("MLI").innerHTML="10.-Maestría en Comencio, Mención Gestión Logística Internacional";
    document.getElementById("MDP").innerHTML="11.-Maestría en Derecho Penal"
}

function ocultar() {
    document.getElementById("sidebar").style.width = "5%";
  //  document.getElementById("eys-contenido-g").style.marginLeft = "5%";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
    document.getElementById("MTI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/usuario.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MCA").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/persona.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MFI").innerHTML="<img src=\"<?php echo base_url(); ?>assets/iconos/perfil.png\" wide=\"49\" height=\"50\" alt=\"Formget logo\">";
    document.getElementById("MAG").innerHTML="5.-MAG";
    document.getElementById("MGA").innerHTML="6.-MGA";
    document.getElementById("MEM").innerHTML="7.-MEM";
    document.getElementById("MMD").innerHTML="8.-MMD";
    document.getElementById("MEE").innerHTML="9.-MEE";
    document.getElementById("MLI").innerHTML="10.-MLI";
    document.getElementById("MDP").innerHTML="11.-MDP";
}


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
