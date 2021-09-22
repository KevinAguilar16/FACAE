<div id="eys-nav-i">

<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
<?php echo form_open('emisor/save_edit') ?>
    <ul>
        <li> <?php echo anchor('emisor/primero/', 'primero'); ?></li>
        <li> <?php echo anchor('emisor/anterior/'.$emisor['iddocumento'], 'anterior'); ?></li>
        <li> <?php echo anchor('emisor/siguiente/'.$emisor['iddocumento'], 'siguiente'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('emisor/ultimo/', 'Último'); ?></li>
        <li> <?php echo anchor('emisor/add', 'Nuevo'); ?></li>
        <li> <?php echo anchor('emisor/edit/'.$emisor['iddocumento'],'Edit'); ?></li>
        <li style="border-right:1px solid green"> <?php echo anchor('emisor/delete/'.$emisor['iddocumento'],'Delete'); ?></li>
        <li> <?php echo anchor('emisor/listar/','Listar'); ?></li>

    </ul>
</div>
<br>


<?php echo form_hidden('iddocumento',$emisor['iddocumento']) ?>
<table>

<tr>
     <td>Id Documento:</td>
     <td><?php echo form_input('iddocumento',$emisor['iddocumento'],array("disabled"=>"disabled",'placeholder'=>'Iddocumentos')) ?></td>
  </tr>
<tr>
     <td>Documento:</td>
     <td><?php 
$options= array("NADA");
foreach ($documentos as $row){
	$options[$row->iddocumento]= $row->asunto;
}

echo form_input('iddocumento',$options[$emisor['iddocumento']],array("disabled"=>"disabled")) ?></td>
  </tr>
 
 
  <tr>
     <td>Id Persona:</td>
     <td><?php echo form_input('idpersona',$emisor['idpersona'],array("disabled"=>"disabled",'placeholder'=>'Idemisores')) ?></td>
  </tr>
<tr>
     <td>Persona:</td>
     <td><?php 
$options= array("NADA");
foreach ($personas as $row){
	$options[$row->idpersona]= $row->nombres;
}

echo form_input('nombre',$options[$emisor['idpersona']],array("disabled"=>"disabled")) ?></td>
  </tr>

 
  








</table>
<?php echo form_close(); ?>





</body>









</html>
