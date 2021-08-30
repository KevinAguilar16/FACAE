<?php echo form_open('usuario/save_edit') ?>
<?php echo form_hidden('idusuario',$usuario['idusuario']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<table>
  <tr>
     <td>password</td>
     <td><?php echo form_input('password',$usuario['password'],array('placeholder'=>'Password')) ?></td>
  </tr>
  <tr>
     <td>idpersona:</td>
     <td><?php echo form_input('idpersona',$usuario['idpersona'],array('placeholder'=>'Idpersona')) ?></td>
  </tr>
   <tr>
     <td>idperfil</td>
     <td><?php echo form_textarea('idperfil',$usuario['idperfil'],array('placeholder'=>'Idpefil')) ?></td>
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
