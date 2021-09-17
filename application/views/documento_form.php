
<div style="margin-top:5cm;">
<h2> <?php echo $title; ?> </h2>
</div>
<hr/>
<?php echo form_open("documento/save") ?>
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

<tr>
<td colspan="2"> <hr><?php echo form_submit("submit", "Updata Item!"); ?><?php echo anchor("documento","Back") ?> </td>
</tr>

</table>
<?php echo form_close();?>

