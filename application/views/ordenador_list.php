<html>


<body>

<h2> <?php echo $title;  ?></h2>
<hr/>
<?php echo anchor('ordenador/add', 'NUEVO ORDENADOR'); ?>
<br>
<br>

<table border="1">
<tr>

<th> ID ORDENADOR</th>
<th> NOMBRE</th>
</tr>
<tbody>
<?php  foreach($ordenador_list as $list) { ?>
<tr>

<td> <?php echo $list->idordenador ?></td>
<td> <?php echo $list->nombre?></td>
<td> <?php echo anchor('ordenador/edit/'.$list->idordenador,'Editar') ?> || <?php echo anchor('ordenador/delete/'.$list->idordenador,'Eliminar') ?></td>
 </tr>


<?php } ?>

</tbody>
</table>








</body>









</html>
