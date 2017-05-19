<?php
/**
 * Created by foros.
 * User: chalosalvador
 * Date: 16/5/17
 * Time: 17:52
 */

require 'utils.php';

$destino = 'index.php';
if($_POST && isset($_POST['tema'])) {

	$tema = $_POST['tema'];

	if ( ! isset($_SESSION['foros'])) {
		$_SESSION['foros'] = [
			[
				'tema' => $tema,
				'mensajes' => []
			]
		];
	} else {
		$_SESSION['foros'][] = [
			'tema' => $tema,
			'mensajes' => []
		];
	}

	$destino = 'mensajes_foro.php?id_foro=' . (count($_SESSION['foros']) - 1);

//	debug($_SESSION['foros']);
}

redirect($destino);