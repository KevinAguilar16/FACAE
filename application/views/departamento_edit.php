<?php echo form_open('departamento/save_edit') ?>
<?php echo form_hidden('iddepartamento',$departamento['iddepartamento']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<table>
 
   <tr>
     <td>iddepartamento</td>
     <td><?php echo form_textarea('iddepartamento',$departamento['iddepartamento'],array('placeholder'=>'Iddepartamento')) ?></td>
  </tr> 
  <tr>
      <td>nombre:</td>
      <td><?php echo form_input('nombre',$departamento['nombre'],array('placeholder'=>'nombre')) ?></td>
  </tr>
 
 <tr>
 <td colspan="2"> <hr><?php echo form_submit('submit', 'Update Item!'); ?> <?php echo anchor('usuario','Back') ?></td>
 </tr>
</table>
<?php echo form_close(); ?>
