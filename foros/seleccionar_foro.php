<?php
/**
 * Created by foros.
 * User: chalosalvador
 * Date: 16/5/17
 * Time: 17:52
 */

require('utils.php');
include ('html_cerrar_session.php');

$usuario = $_SESSION['usuario'];

$foros = [];
if (isset($_SESSION['foros'])){
	$foros = $_SESSION['foros'];
}

?>

<html>
<head>

</head>

<body>
<div>
	<h1>Bienvenido <?php echo $usuario ?></h1>

	<form action="registrar_foro.php" method="post">
		<div>
			<label for="tema">Registrar un nuevo tema</label>
			<input type="text" name="tema" id="tema">
		</div>

		<button>Registrar tema</button>
	</form>
</div>

<div>
	<?php if (!$foros) { ?>
		<h3>No hay foros registrados!</h3>
	<?php } else { ?>
	<ul>
		<?php foreach ($foros as $idForo => $foro) { ?>
			<li>
				<a href="mensajes_foro.php?id_foro=<?php echo $idForo ?>">
					<?php echo $foro['tema'] ?>
				</a>
			</li>
		<?php } ?>
	</ul>

	<?php } ?>
</div>
</body>
</html>
