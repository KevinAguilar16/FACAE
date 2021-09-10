<?php echo form_open('unidad/save_edit') ?>
<?php echo form_hidden('idunidad',$unidad['idunidad']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<table>
 
   <tr>
     <td>idunidad</td>
     <td><?php echo form_textarea('idunidad',$unidad['idunidad'],array('placeholder'=>'Idunidad')) ?></td>
  </tr> 
  <tr>
      <td>nombre:</td>
      <td><?php echo form_input('nombre',$unidad['nombre'],array('placeholder'=>'nombre')) ?></td>
  </tr>
 
 <tr>
 <td colspan="2"> <hr><?php echo form_submit('submit', 'Update Item!'); ?> <?php echo anchor('usuario','Back') ?></td>
 </tr>
</table>
<?php echo form_close(); ?>
