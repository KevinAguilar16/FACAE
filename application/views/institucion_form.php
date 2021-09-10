<h2> <?php echo $title; ?> </h2>
<hr/>
<?php echo form_open("institucion/save") ?>
<?php echo form_hidden("idinstitucion")  ?>
<table>



<tr>
<td> idinstitucion </td>
<td><?php echo form_input("idinstitucion","", array("placeholder"=>"idinstitucion"))  ?></td>
</tr>

<tr>
<td> nombre </td>
<td><?php echo form_input("nombre","", array("placeholder"=>"nombre"))  ?></td>
</tr>

<tr>
<td colspan="2"> <hr><?php echo form_submit("submit", "Updata Item!"); ?><?php echo anchor("usuario","Back") ?> </td>
</tr>

</table>
<?php echo form_close();?>

