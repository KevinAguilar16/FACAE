<html>


<body>

<h2> <?php echo $title;  ?></h2>
<hr/>
<?php echo anchor('persona/add', 'NUEVA PERSONA'); ?>
<br>
<br>

<table border="1">
<tr>
<th> ID</th>
<th> CEDULA</th>
<th> APELLIDOS</th>
<th> NOMBRES-</th>
</tr>
<tbody>
<?php  foreach($persona_list as $list) { ?>
<tr>
<td> <?php echo $list->idpersona ?></td>
<td> <?php echo $list->cedula ?></td>
<td> <?php echo $list->apellidos ?></td>
<td> <?php echo $list->nombres ?></td>
<td> <?php echo anchor('persona/edit/'.$list->idpersona,'Edit') ?> || <?php echo anchor('persona/delete/'.$list->idpersona,'Delete') ?></td>
 </tr>


<?php } ?>

</tbody>
</table>








</body>









</html>
