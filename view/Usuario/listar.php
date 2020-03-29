<?php
include '../../control/UsuarioControl.php';
$usuarioControl = new ConteudoControl();

header('Content-Type: application/json');

foreach($usuarioControl->findAll() as $valor){
	echo json_encode($valor);
}


?>