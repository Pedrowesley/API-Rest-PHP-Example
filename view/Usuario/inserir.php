<?php
include '../../control/UsuarioControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
echo $obj;



if(!empty($data)){	
 $usuarioControl = new ConteudoControl();
 $usuarioControl->insert($obj);
 header('Location:listar.php');
}







?>