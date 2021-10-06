<?php

require_once('usuario.php');
require_once('crud_usuario.php');
require_once('conexion.php');

session_start();


if(!isset($_SESSION["usuario"])) {
header("location:index.php");
} 
$sql = "SELECT * FROM `usuario` WHERE nombre = 6";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Doctor</title>
    <link rel="shortcut icon" href="img/logoCallDoctorLetra.png">
    <link rel="stylesheet" href="css/continuarregistro.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <title>Registro</title>
</head>

<body>


    <nav class="navbar">

        <a href="index.html" class="logo"><img src="img/logoCallDoctorletra.png" alt="" width="150px" height="65px"></a>
        <ul>
        <form class="w3-container" action="controller_login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>
         
        </ul>
    </nav>
    <section class="principal">
  
        <h4>Estos datos son privados.</h4>
        <p>
            <?php  header( $sql); ?>
            <br>
        (Complete estos datos con su direccion y/o 
        indicaciones <p>para hacer mas rapida la llegada
        de su doctor)</p>
        </p>
    </section>
  
    <section class="Datos">
        <img src="img/iconoUbicacion.png" />
    </section>
    <form class="login-form" action="informacionpaciente.php" method="post">
        
  
        <input type="text" class="login-idiomas" autofocus="true" required="true" name="usuario"placeholder="Nombre completo" />
        <input type="date" class="login-idiomas" autofocus="true" required="true" name="nacimiento"placeholder="fecha nacimiento" />
        <input type="text" class="login-idiomas" autofocus="true" required="true" name="direccion" placeholder="direccion(casa, oficina, etc...)" />
        <input type="tel" class="login-number" autofocus="true" required="true" name="numero" placeholder="Escriba su numero de contacto" />
        <p>
            <select name="Lista" class="selec">
                <option value="1">Elija su ciudad</option>
                <option value="Popayán">Popayán</option>
                <option value="Cali">Cali </option>
                <option value="Medellin">Medellin</option>
                <option value="Bogota">Bogota</option>

            </select>
        </p>
        <div class="checkBox">
            <input type="checkbox" id="ch1" value="first_checkbox" /><label>Acepto los terminos y condiciones, la
                politica de privacidad u el
                tratamiento de datos </label><br>
               
        </div>
        <button type="submit" name="login" class="btnCrearCuenta">Registrar</button> 
     
    </form>
    

<script src="/js/main.js"></script>
</body>
</html>