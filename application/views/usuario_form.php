
<div style="margin-top:5cm;">
<h2> <?php echo $title; ?> </h2>
</div>
<hr/>
<?php echo form_open("usuario/save") ?>
<?php echo form_hidden("idusuario")  ?>
<table>
<tr>
<td> Password </td>
<td><?php echo form_input("password","", array("placeholder"=>"Password"))  ?></td>
</tr>

<tr>
<td> idpersona </td>
<td><?php
$options= array('--Select--');
foreach ($personas as $row){
	$options[$row->idpersona]= $row->nombres;
}

 echo form_dropdown("idpersona",$options, set_select('--Select--','default_value'));  ?></td>
</tr>


<tr>
<td> idperfil </td>
<td><?php 

$options= array('--Select--');
foreach ($perfiles as $row){
	$options[$row->idperfil]= $row->descripcion;
}

 echo form_dropdown("idperfil",$options, set_select('--Select--','default_value'));  ?></td>
</tr>

<tr>
<td> email </td>
<td><?php echo form_input("email","", array("placeholder"=>"email"))  ?></td>
</tr>

<tr>
<td colspan="2"> <hr><?php echo form_submit("submit", "Updata Item!"); ?><?php echo anchor("usuario","Back") ?> </td>
</tr>

</table>
<?php echo form_close();?>

