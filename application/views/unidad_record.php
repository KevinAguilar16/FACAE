<div id="eys-nav-i">

<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
<?php echo form_open('unidad/save_edit') ?>
    <ul>
        <li> <?php echo anchor('unidad/primero/', 'primero'); ?></li>
        <li> <?php echo anchor('unidad/anterior/'.$unidad['idunidad'], 'anterior'); ?></li>
        <li> <?php echo anchor('unidad/siguiente/'.$unidad['idunidad'], 'siguiente'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('unidad/ultimo/', 'Último'); ?></li>
        <li> <?php echo anchor('unidad/add', 'Nuevo'); ?></li>
        <li> <?php echo anchor('unidad/edit/'.$unidad['idunidad'],'Edit'); ?></li>
        <li style="border-right:1px solid green"> <?php echo anchor('unidad/delete/'.$unidad['idunidad'],'Delete'); ?></li>
        <li> <?php echo anchor('unidad/listar/','Listar'); ?></li>

    </ul>
</div>
<br>


<?php echo form_hidden('idunidad',$unidad['idunidad']) ?>
<table>

<tr>
     <td>Institucion:</td>
     <td><?php 
$options= array("NADA");
foreach ($instituciones as $row){
	$options[$row->idinstitucion]= $row->nombre;
}

echo form_input('idinstitucion',$options[$unidad['idinstitucion']],array("disabled"=>"disabled")) ?></td>
  </tr>
 
 


  <tr>
     <td>Id Unidad:</td>
     <td><?php echo form_input('idunidad',$unidad['idunidad'],array("disabled"=>"disabled",'placeholder'=>'Idunidads')) ?></td>
  </tr>
 
 
 
  <tr>
     <td>Nombre:</td>
     <td><?php echo form_input('nombre',$unidad['nombre'],array("disabled"=>"disabled",'placeholder'=>'Nombre')) ?></td>
  </tr>


  








</table>
<?php echo form_close(); ?>





</body>









</html>
