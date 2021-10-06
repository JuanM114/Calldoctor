<?php
$destino= "asistenciacalldoctor@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$comentarios = $_POST["comentarios"];
$contenido = "nombre: " . $nombre . "\ncorreo: " . $correo . "\ntelefono: " . $telefono  . "\ncomentarios: " . $comentarios;
mail($destino, "contacto", $contenido);


?>
