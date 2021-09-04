<html>


<body>

<h2> <?php echo $title;  ?></h2>
<hr/>
<?php echo anchor('documento/add', 'NUEVO DOCUMENTO'); ?>
<br>
<br>

<table border="1">
<tr>
<th> ID</th>
<th> ARCHIVO PDF</th>
<th> ASUNTO</th>
<th> FECHA ELABORACION</th>
<th> FECHA RECEPCION</th>
<th> OBSERVACION</th>
</tr>
<tbody>
<?php  foreach($documento_list as $list) { ?>
<tr>
<td> <?php echo $list->iddocumento ?></td>
<td> <?php echo $list->archivopdf ?></td>
<td> <?php echo $list->asunto ?></td>
<td> <?php echo $list->fechaelaboracion ?></td>
<td> <?php echo $list->fechaentrerecep?></td>
<td> <?php echo $list->observacion?></td>
<td> <?php echo anchor('documento/edit/'.$list->iddocumento,'Edit') ?> || <?php echo anchor('documento/delete/'.$list->iddocumento,'Delete') ?></td>
 </tr>


<?php } ?>

</tbody>
</table>








</body>









</html>
