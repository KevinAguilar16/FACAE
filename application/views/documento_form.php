<div id="eys-nav-i">
<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>

<?php echo form_open("documento/save",array('id'=>'eys-form')); ?>


    <ul>
	<li> <a href="javascript:{}" onclick="document.getElementById('eys-form').submit(); return false;">Guardar</a></li>
        <li> <?php echo anchor('documento', 'Cancelar'); ?></li>
    </ul>
</div>
<br>





<?php echo form_hidden("iddocumento")  ?>
<table>

<tr>
<td> Tipo de documento:</td>
<td><?php
$options= array('--Select--');
foreach ($tipodocus as $row){
	$options[$row->idtipodocu]= $row->descripcion;
}

 echo form_dropdown("idtipodocu",$options, set_select('--Select--','default_value'));  ?></td>
</tr>




<tr>
<td> fecha elaboracion </td>
<td><?php echo form_input(array("name"=>"fechaelaboracion","id"=>"fechaelaboracion","type"=>"date"));  ?></td>
</tr>

<tr>
<td> Fecha Recepcion </td>
<td><?php echo form_input(array("name"=>"fechaentrerecep","id"=>"fechaentrerecep","type"=>"date"));  ?></td>
</tr>

<tr>
<td> asunto </td>
<td><?php echo form_textarea("asunto","", array("placeholder"=>"asunto"))  ?></td>
</tr>



<tr>
<td> archivo_pdf </td>
<td><?php echo form_upload("archivopdf","archivopdf")  ?></td>
</tr>

<tr>
<td> Observacion </td>
<td><?php echo form_textarea("observacion","", array("placeholder"=>"observacion"))  ?></td>
</tr>


</table>
<?php echo form_close();?>

