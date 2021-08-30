<h2> <?php echo $title; ?> </h2>
<hr/>
<?php echo form_open("perfil/save") ?>
<?php echo form_hidden("idperfil")  ?>
<table>



<tr>
<td> idperfil </td>
<td><?php echo form_input("idperfil","", array("placeholder"=>"idperfil"))  ?></td>
</tr>

<tr>
<td> descripcion </td>
<td><?php echo form_input("descripcion","", array("placeholder"=>"descripcion"))  ?></td>
</tr>

<tr>
<td colspan="2"> <hr><?php echo form_submit("submit", "Updata Item!"); ?><?php echo anchor("usuario","Back") ?> </td>
</tr>

</table>
<?php echo form_close();?>

