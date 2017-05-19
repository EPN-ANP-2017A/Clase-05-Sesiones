<?php
/**
 * Created by foros.
 * User: chalosalvador
 * Date: 16/5/17
 * Time: 17:51
 */

require('utils.php');

$error = '';
if($_GET && isset($_GET['error'])) {
    switch ($_GET['error']) {
        case 1:
	        $error = 'Usuario o contraseña incorrecta!';
	        break;
        case 2:
	        $error = 'Inicie sesión';
	        break;
        default:
            $error = '';
    }

}

if(isset($_SESSION['usuario'])) {
    redirect('seleccionar_foro.php');
}
?>

<html>
<head>

</head>

<body>

<div><?php echo $error ?></div>
<form action="validar.php" method="post">
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
    </div>

    <div>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <button>Ingresar</button>
    </div>
</form>
</body>

</html>
