<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="shortcut icon" href="img/logocalldoctor.png">
	<link rel="stylesheet" href="css/estilosInicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>


<body>
<nav class="navbar">
            <a href="#inicio" class="logo"><img src="img/logocalldoctor.png" alt="" width="150px" height="50px"></a>
            <ul>
                <li><a href="#informacion">Información</a></li>
                <li><a href="#contactenos">Contactenos</a></li>
                <li><a href="registrarse.php">Registrarse</a>
                    <ul>
                        <li><a href="registrarse.php">Como Paciente</a></li>
                        <li id="btnRegistroCentroMedico"><a href="registramedico.php">Como Medico</a></li>
                    </ul>
                </li>
                <li><a href="index.php" class="liIniciarSesion">Iniciar Sesión</a>
                    
                    <ul>
                     
                        <li><a href="index.php">Como Paciente</a></li>
                        <li id="btnRegistroCentroMedico"><a href="opciones.html">Admin</a></li>
                        <li id="btnRegistroCentroMedico"><a href="indexmedico.php">Como Medico</a></li>
                    </ul></li>
                
            </ul>
        </nav>

   <form action="control_medico.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Inicio de sesion como medico</h1>
   <p>Ingrese su numnero de identificacion <input type="text" placeholder="ingrese su nombre" name="usuario"></p>

   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="pas"></p>
   
   <p>Tipo de usuario:
    <select name="tipo">
        <option value="Medico">Medico </option>

    </select>
    </p>
	<input type="hidden" name="entrar" value="entrar">
			<button class="w3-btn w3-green">Aceptar</button>
   
   </form> 
</body>
</html>