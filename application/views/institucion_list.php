<html>


<body>

<h2> <?php echo $title;  ?></h2>
<hr/>
<?php echo anchor('institucion/add', 'NUEVA INSTITUCION'); ?>
<br>
<br>

<table border="1">
<tr>

<th> IDINSTITUCION</th>
<th> NOMBRE</th>
</tr>
<tbody>
<?php  foreach($institucion_list as $list) { ?>
<tr>

<td> <?php echo $list->idinstitucion ?></td>
<td> <?php echo $list->nombre?></td>
<td> <?php echo anchor('peinstitucionrfil/edit/'.$list->idinstitucion,'Edit') ?> || <?php echo anchor('institucion/delete/'.$list->idinstitucion,'Delete') ?></td>
 </tr>


<?php } ?>

</tbody>
</table>








</body>









</html>
