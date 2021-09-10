<html>


<body>

<h2> <?php echo $title;  ?></h2>
<hr/>
<?php echo anchor('unidad/add', 'NUEVA UNIDAD'); ?>
<br>
<br>

<table border="1">
<tr>

<th> IDUNIDAD</th>
<th> NOMBRE</th>
</tr>
<tbody>
<?php  foreach($unidad_list as $list) { ?>
<tr>

<td> <?php echo $list->idunidad ?></td>
<td> <?php echo $list->nombre?></td>
<td> <?php echo anchor('unidad/edit/'.$list->idunidad,'Edit') ?> || <?php echo anchor('unidad/delete/'.$list->idunidad,'Delete') ?></td>
 </tr>


<?php } ?>

</tbody>
</table>








</body>









</html>
