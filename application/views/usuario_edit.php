<?php echo form_open('usuario/save_edit') ?>
<?php echo form_hidden('idusuario',$usuario['idusuario']) ?>
<div style="margin-top=5cm">
<h2> <?php echo $title; ?></h2>
</div>
<hr />
<table>
  <tr>
     <td>password</td>
     <td><?php echo form_input('password',$usuario['password'],array('placeholder'=>'Password')) ?></td>
  </tr>
  <tr>
     <td>idpersona:</td>
      
     <td><?php 

 $options = array('--Select--');
  foreach ($personas as $row){
	$options[$row->idpersona]=$row->nombres;
}

echo form_dropdown('idpersona',$options,$usuario['idpersona']); ?></td>
  </tr>
   <tr>
     <td>idperfil</td>
     <td><?php

 $options = array('--Select--');
  foreach ($perfiles as $row){
	$options[$row->idperfil]=$row->descripcion;
}



 echo form_dropdown('idperfil',$options,$usuario['idperfil']) ?></td>
  </tr> 
  <tr>
      <td>email:</td>
      <td><?php echo form_input('email',$usuario['email'],array('placeholder'=>'email')) ?></td>
  </tr>
 
 <tr>
 <td colspan="2"> <hr><?php echo form_submit('submit', 'Update Item!'); ?> <?php echo anchor('usuario','Back') ?></td>
 </tr>
</table>
<?php echo form_close(); ?>
