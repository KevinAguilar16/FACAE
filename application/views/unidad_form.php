<h2> <?php echo $title; ?> </h2>
<hr/>
<?php echo form_open("unidad/save") ?>
<?php echo form_hidden("idunidad")  ?>
<table>



<tr>
<td> idunidad </td>
<td><?php echo form_input("idunidad","", array("placeholder"=>"idunidad"))  ?></td>
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

