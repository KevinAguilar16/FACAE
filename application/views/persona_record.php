<div id="eys-nav-i">

<h3 style="text-align: left; margin-top:-10px;"> <?php echo $title;  ?></h3>
<?php echo form_open('persona/save_edit') ?>
    <ul>
        <li> <?php echo anchor('persona/primero/', 'primero'); ?></li>
        <li> <?php echo anchor('persona/anterior/'.$persona['idpersona'], 'anterior'); ?></li>
        <li> <?php echo anchor('persona/siguiente/'.$persona['idpersona'], 'siguiente'); ?></li>
        <li style="border-right:1px solid green"><?php echo anchor('persona/ultimo/', 'Último'); ?></li>
        <li> <?php echo anchor('persona/add', 'Nuevo'); ?></li>
        <li> <?php echo anchor('persona/edit/'.$persona['idpersona'],'Edit'); ?></li>
        <li style="border-right:1px solid green"> <?php echo anchor('persona/delete/'.$persona['idpersona'],'Delete'); ?></li>
        <li> <?php echo anchor('persona/listar/','Listar'); ?></li>

    </ul>
</div>
<br>



<table>

  <tr>
     <td>idpersona:</td>
     <td><?php echo form_input('idpersona',$persona['idpersona'],array("disabled"=>"disabled",'placeholder'=>'Idpersonas')) ?></td>
  </tr>
 
 
 
  <tr>
     <td>cedula:</td>
     <td><?php echo form_input('cedula',$persona['cedula'],array("disabled"=>"disabled",'placeholder'=>'cedula')) ?></td>
  </tr>

 
  <tr>
     <td>apellidos:</td>
     <td><?php echo form_input('apellidos',$persona['apellidos'],array("disabled"=>"disabled",'placeholder'=>'apellidos')) ?></td>
  </tr>
  
 
  <tr>
     <td>nombres:</td>
     <td><?php echo form_input('nombres',$persona['nombres'],array("disabled"=>"disabled",'placeholder'=>'nombres')) ?></td>
  </tr>







</table>
<?php echo form_close(); ?>





</body>









</html>
