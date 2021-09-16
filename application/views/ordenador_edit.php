<?php echo form_open('ordenador/save_edit') ?>
<?php echo form_hidden('idordenador',$ordenador['idordenador']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<table>
 
   <tr>
     <td>Id ordenador</td>
     <td><?php echo form_textarea('idordenador',$ordenador['idordenador'],array('placeholder'=>'Idordenador')) ?></td>
  </tr> 
  <tr>
      <td>Nombre:</td>
      <td><?php echo form_input('nombre',$ordenador['nombre'],array('placeholder'=>'Nombre ordenador')) ?></td>
  </tr>
 
 <tr>
 <td colspan="2"> <hr><?php echo form_submit('submit', 'Guardar'); ?> <?php echo anchor('ordenador','Atras') ?></td>
 </tr>
</table>
<?php echo form_close(); ?>
