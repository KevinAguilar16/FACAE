<?php echo form_open('persona/save_edit') ?>
<?php echo form_hidden('idpersona',$persona['idpersona']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<table>
 
   <tr>
     <td>Id persona</td>
     <td><?php 


$eys_arrinput=array('name'=>'idpersona','value'=>$persona['idpersona'],'readonly'=>'true', "style"=>"width:500px");
echo form_input($eys_arrinput); ?></td>
  </tr> 

<tr>
      <td>Nombres:</td>
      <td><?php
       $eys_arrinput=array('names'=>'nombres','value'=>$persona['nombres'], "style"=>"width:500px");
      echo form_input($eys_arrinput); ?></td>
</tr>

<tr>
      <td>Apellidos:</td>
      <td><?php
       $eys_arrinput=array('name'=>'apellidos','value'=>$persona['apellidos'], "style"=>"width:500px");
      echo form_input($eys_arrinput); ?></td>
</tr>
 

 
 <tr>
 <td colspan="2"> <hr><?php echo form_submit('submit', 'Guardar'); ?> <?php echo anchor('persona','Atras') ?></td>
 </tr>
</table>
<?php echo form_close(); ?>
