
<div style="margin-top:5cm;">
<h2> <?php echo $title; ?> </h2>
</div>
<hr/>
<?php echo form_open("documento/save") ?>
<?php echo form_hidden("iddocumentos")  ?>
<table>

<tr>
<td> iddocumentos </td>
<td><?php echo form_input("iddocumentos","", array("placeholder"=>"iddocumentos"))  ?></td>
</tr>


<tr>
<td> archivo_pdf </td>
<td><?php echo form_input("archivopdf","", array("placeholder"=>"archivopdf"))  ?></td>
</tr>

<tr>
<td> asunto </td>
<td><?php echo form_input("asunto","", array("placeholder"=>"asunto"))  ?></td>
</tr>

<tr>
<td> fecha elaboracion </td>
<td><?php echo form_input("fechaelaboracion","", array("placeholder"=>"fechaelaboracion"))  ?></td>
</tr>

<tr>
<td> Fecha Recepcion </td>
<td><?php echo form_input("fechaentrerecep","", array("placeholder"=>"fechaentrerecep"))  ?></td>
</tr>

<tr>
<td> Observacion </td>
<td><?php echo form_input("observacion","", array("placeholder"=>"observacion"))  ?></td>
</tr>

<tr>
<td colspan="2"> <hr><?php echo form_submit("submit", "Updata Item!"); ?><?php echo anchor("documento","Back") ?> </td>
</tr>

</table>
<?php echo form_close();?>

