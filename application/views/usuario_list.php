<html>


<body>

<h2> <?php echo $title;  ?></h2>
<hr/>
<?php echo anchor('usuario/add', 'NUEVA USUARIO'); ?>
<br>
<br>

<table border="1">
<tr>
<th> ID</th>
<th> PASSWORD</th>
<th> IDPERSONA</th>
<th> NOMRE DE LA PERSONA</th>
<th> IDPERFIL</th>
<th> PERFIL</th>
<th> EMAIL</th>
</tr>
<tbody>
<?php  foreach($usuario_list as $list) { ?>
<tr>
<td> <?php echo $list->idusuario ?></td>
<td> <?php echo $list->password ?></td>
<td> <?php echo $list->idpersona ?></td>
<td> <?php echo $list->nombres ?></td>
<td> <?php echo $list->idperfil ?></td>
<td> <?php echo $list->descripcion ?></td>
<td> <?php echo $list->email?></td>
<td> <?php echo anchor('usuario/edit/'.$list->idusuario,'Edit') ?> || <?php echo anchor('usuario/delete/'.$list->idusuario,'Delete') ?></td>
 </tr>


<?php } ?>

</tbody>
</table>








</body>









</html>
