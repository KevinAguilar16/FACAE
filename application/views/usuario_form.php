
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
<td><?php echo form_input("idpersona","", array("placeholder"=>"idpersona"))  ?></td>
</tr>


<tr>
<td> idperfil </td>
<td><?php echo form_input("idperfil","", array("placeholder"=>"idperfil"))  ?></td>
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

