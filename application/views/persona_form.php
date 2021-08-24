<h2> <?php echo $title; ?> </h2>
<hr/>
<?php echo form_open("persona/save") ?>
<?php echo form_hidden("idpersona")  ?>
<table>
<tr>
<td> Cedula </td>
<td><?php echo form_input("cedula","", array("placeholder"=>"Cedula"))  ?></td>
</tr>

<tr>
<td> Nombres </td>
<td><?php echo form_input("nombres","", array("placeholder"=>"Nombres"))  ?></td>
</tr>


<tr>
<td> Apellidos </td>
<td><?php echo form_input("apellidos","", array("placeholder"=>"Apellidos"))  ?></td>
</tr>

<tr>
<td> Fecha de Nacimiento </td>
<td><?php echo form_input("Fecha persona","", array("placeholder"=>"fechanaci"))  ?></td>
</tr>

<tr>
<td colspan="2"> <hr><?php echo form_submit("submit", "Updata Item!"); ?><?php echo anchor("persona","Back") ?> </td>
</tr>

</table>
<?php echo form_close();?>

