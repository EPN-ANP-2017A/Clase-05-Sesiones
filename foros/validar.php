<?php
/**
 * Created by foros.
 * User: chalosalvador
 * Date: 16/5/17
 * Time: 17:51
 */
require('utils.php');

$usuarios = [
	'jose' => '12345',
	'pedro' => '12345',
	'maria' => '12345'
];

$destino = 'index.php';
if($_POST) {
	$usuario = $_POST['nombre'];
	$password = $_POST['password'];


	foreach ($usuarios as $u => $p) {
		if($usuario == $u && $password == $p) {
			$_SESSION['usuario'] = $usuario;
			$destino = 'seleccionar_foro.php';
		}
	}
	$destino = 'index.php?error=1';
}

redirect($destino);

