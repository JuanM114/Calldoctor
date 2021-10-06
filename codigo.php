<?php 
require_once('usuario.php');
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: indexmedico.php');

        echo "Su usuario es : $usuario";
	}
//va al inicio de continuar registro.php
?>
