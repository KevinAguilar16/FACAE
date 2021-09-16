<h2> <?php echo $title; ?> </h2>
<hr/>
<?php echo form_open("directorio/save") ?>
<?php echo form_hidden("iddirectorio")  ?>
<table>


<tr>
<td> Institución </td>
<td><?php 

$options= array('--Select--');
foreach ($instituciones as $row){
	$options[$row->idinstitucion]= $row->nombre;
}

 echo form_dropdown("idordenador",$options, set_select('--Select--','default_value'));  ?></td>
</tr>


<tr>
<td> Nombre </td>
<td><?php echo form_input("nombre","", array("placeholder"=>"Nombre de directorio"))  ?></td>
</tr>

<tr>
<td colspan="2"> <hr><?php echo form_submit("submit", "Guardar"); ?><?php echo anchor("directorio","Atras") ?> </td>
</tr>

</table>
<?php echo form_close();?>

