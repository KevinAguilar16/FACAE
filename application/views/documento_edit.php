<div id="eys-nav-i">
<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>


<?php echo form_open('documento/save_edit',array('id'=>'eys-form')); ?>


  <ul>
	<li> <a href="javascript:{}" onclick="document.getElementById('eys-form').submit(); return false;">Guardar</a></li>
        <li> <?php echo anchor('documento', 'Cancelar'); ?></li>
    </ul>
</div>
<br>



<?php echo form_hidden('iddocumento',$documento['iddocumento']) ?>

<table>

<tr>
<td> Tipo de documento:</td>
<td><?php
$options= array('--Select--');
foreach ($tipodocus as $row){
	$options[$row->idtipodocu]= $row->descripcion;
}

 echo form_dropdown("idtipodocu",$options, $documento['idtipodocu']);  ?></td>
</tr>






  <tr>
     <td>iddocumento:</td>
     <td><?php echo form_input('iddocumento',$documento['iddocumento'],array("disabled"=>"disabled",'placeholder'=>'Iddocumentos')) ?></td>
  </tr>
 
 <tr>
      <td>Fecha Elaboracion:</td>
      <td><?php echo form_input('fechaelaboracion',$documento['fechaelaboracion'],array('type'=>'date','placeholder'=>'fechaelaboracion')) ?></td>
  </tr>

  <tr>
      <td>Fecha Recepcion:</td>
      <td><?php echo form_input('fechaentrerecep',$documento['fechaentrerecep'],array('type'=>'date', 'placeholder'=>'fechaentrerecep')) ?></td>
  </tr>
 
  <tr>
      <td>Asunto:</td>
      <td><?php echo form_textarea('asunto',$documento['asunto'],array('placeholder'=>'asunto')) ?></td>
  </tr>


  <tr>
     <td>Archivo_Pdf</td>
     <td><?php echo form_textarea('archivopdf',$documento['archivopdf'],array('placeholder'=>'archivopdf')) ?></td>
  </tr> 
   <tr>
      <td>Observacion:</td>
      <td><?php echo form_textarea('observacion',$documento['observacion'],array('placeholder'=>'observacion')) ?></td>
  </tr>

</table>
<?php echo form_close(); ?>
