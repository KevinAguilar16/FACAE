<div id="eys-nav-i">

<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
<?php echo form_open('institucion/save_edit') ?>
    <ul>
        <li> <?php echo anchor('institucion/primero/', 'primero'); ?></li>
        <li> <?php echo anchor('institucion/siguiente/'.$institucion['idinstitucion'], 'siguiente'); ?></li>
        <li> <?php echo anchor('institucion/anterior/'.$institucion['idinstitucion'], 'anterior'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('institucion/ultimo/', 'Último'); ?></li>
        <li> <?php echo anchor('institucion/add', 'Nuevo'); ?></li>
        <li> <?php echo anchor('institucion/edit/'.$institucion['idinstitucion'],'Edit'); ?></li>
        <li style="border-right:1px solid green"> <?php echo anchor('institucion/delete/'.$institucion['idinstitucion'],'Delete'); ?></li>
        <li> <?php echo anchor('institucion/listar/','Listar'); ?></li>
    </ul>
</div>
<br>
<br>


<?php echo form_hidden('idinstitucion',$institucion['idinstitucion']) ?>
<table>

  <tr>
     <td>Id Institucion:</td>
     <td><?php

  $eys_arrctl=array("name"=>'idinstitucion','value'=>$institucion['idinstitucion'],"disabled"=>"disabled",'placeholder'=>'Idinstitucions','style'=>'width:500px;');
 echo form_input($eys_arrctl) ?></td>
  </tr>
 
 <tr>
      <td>Nombre:</td>
      <td><?php


  $eys_arrctl=array("name"=>'nombre','value'=>$institucion['nombre'],"disabled"=>"disabled",'placeholder'=>'Inombre','style'=>'width:500px;');
 echo form_input($eys_arrctl) ?></td>
  </tr>

  


   
   

</table>
<?php echo form_close(); ?>





</body>









</html>
