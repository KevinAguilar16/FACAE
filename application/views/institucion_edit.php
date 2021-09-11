<?php echo form_open('institucion/save_edit') ?>
<?php echo form_hidden('idinstitucion',$institucion['idinstitucion']) ?>
<h2> <?php echo $title; ?></h2>
<hr />
<table>
 
   <tr>
     <td>Id Institucion</td>
     <td><?php echo form_textarea('idinstitucion',$institucion['idinstitucion'],array('placeholder'=>'Idinstitucion')) ?></td>
  </tr> 
  <tr>
      <td>Nombre:</td>
      <td><?php echo form_input('nombre',$institucion['nombre'],array('placeholder'=>'Nombre Institucion')) ?></td>
  </tr>
 
 <tr>
 <td colspan="2"> <hr><?php echo form_submit('submit', 'Guardar'); ?> <?php echo anchor('institucion','Atras') ?></td>
 </tr>
</table>
<?php echo form_close(); ?>
