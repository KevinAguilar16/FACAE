<?php echo form_open('institucion/save_edit') ?>
<?php echo form_hidden('idinstitucion',$institucion['idinstitucion']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<table>
 
   <tr>
     <td>idinstitucion</td>
     <td><?php echo form_textarea('idinstitucion',$institucion['idinstitucion'],array('placeholder'=>'Idinstitucion')) ?></td>
  </tr> 
  <tr>
      <td>nombre:</td>
      <td><?php echo form_input('nombre',$institucion['nombre'],array('placeholder'=>'nombre')) ?></td>
  </tr>
 
 <tr>
 <td colspan="2"> <hr><?php echo form_submit('submit', 'Update Item!'); ?> <?php echo anchor('usuario','Back') ?></td>
 </tr>
</table>
<?php echo form_close(); ?>
