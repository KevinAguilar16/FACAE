<div id="eys-nav-i">

<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
<?php echo form_open('destinatario/save_edit') ?>
    <ul>
        <li> <?php echo anchor('destinatario/primero/', 'primero'); ?></li>
        <li> <?php echo anchor('destinatario/anterior/'.$destinatario['iddocumento'], 'anterior'); ?></li>
        <li> <?php echo anchor('destinatario/siguiente/'.$destinatario['iddocumento'], 'siguiente'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('destinatario/ultimo/', 'Último'); ?></li>
        <li> <?php echo anchor('destinatario/add', 'Nuevo'); ?></li>
        <li> <?php echo anchor('destinatario/edit/'.$destinatario['iddocumento'],'Edit'); ?></li>
        <li style="border-right:1px solid green"> <?php echo anchor('destinatario/delete/'.$destinatario['iddocumento'],'Delete'); ?></li>
        <li> <?php echo anchor('destinatario/listar/','Listar'); ?></li>

    </ul>
</div>
<br>


<?php echo form_hidden('iddocumento',$destinatario['iddocumento']) ?>
<table>

<tr>
     <td>Id Documento:</td>
     <td><?php echo form_input('iddocumento',$destinatario['iddocumento'],array("disabled"=>"disabled",'placeholder'=>'Iddocumentos')) ?></td>
  </tr>
<tr>
     <td>Documento:</td>
     <td><?php 
$options= array("NADA");
foreach ($documentos as $row){
	$options[$row->iddocumento]= $row->asunto;
}

echo form_input('iddocumento',$options[$destinatario['iddocumento']],array("disabled"=>"disabled")) ?></td>
  </tr>
 
 
  <tr>
     <td>Id Persona:</td>
     <td><?php echo form_input('idpersona',$destinatario['idpersona'],array("disabled"=>"disabled",'placeholder'=>'Iddestinatarioes')) ?></td>
  </tr>
<tr>
     <td>Persona:</td>
     <td><?php 
$options= array("NADA");
foreach ($personas as $row){
	$options[$row->idpersona]= $row->nombres;
}

echo form_input('nombre',$options[$destinatario['idpersona']],array("disabled"=>"disabled")) ?></td>
  </tr>

 
  








</table>
<?php echo form_close(); ?>





</body>









</html>
