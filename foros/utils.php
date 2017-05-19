<?php
/**
 * Created by foros.
 * User: chalosalvador
 * Date: 16/5/17
 * Time: 18:10
 */
session_start();

function redirect($url) {
	header('Location: ' . $url);
	exit();
}

function debug($variable){
	echo '<pre>';
	print_r($variable);
	echo '</pre>';
}

if( $_SERVER['SCRIPT_NAME'] != '/foros/index.php'
    && $_SERVER['SCRIPT_NAME'] != '/foros/validar.php'
    && ! isset($_SESSION['usuario'])) {
	redirect('index.php?error=2');
}