<?php 
require_once('usuario.php');
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Doctor</title>
    <link rel="shortcut icon" href="img/logoCallDoctorLetra.png">
    <link rel="stylesheet" href="css/vistamedica.css">
    <link rel="stylesheet" href="css/coninuarregistro.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Registro</title>
</head>

<body>
    <nav class="navbar">
        <a href="index.html" class="logo"><img src="img/logoCallDoctorletra.png" alt="" width="150px" height="65px"></a>
        <ul>
            <li><a href="index.html" class="liIniciarSesion">Volver</a></li>    
        </ul>
    </nav>
    <section class="principal">
        <h1>Complete los datos</h1>
        <h4>Estos datos son privados.</h4>
        <p>
            <br>
        (Complete estos datos para poder acceder al
        servicio de "visita medica" o si ya se encuentra
        registrado simplemente inicie sesion)
        </p>
    </section>
    <section class="Datos">
        <img src="img/fondoAboutAzul.png" />
    </section>
    <form class="login-form"  action="registrovisitamedica.php" method="post">
        <p>
            <select name="Lista" class="selec" required>
                <option value="1">Elija la especialidad que le atendera</option>
                <option value="Medico general">Medico general</option>
                <option value="Optometra">Optometra </option>
                <option value="Pediatra">Pediatra</option>
                <option value="Psiquiatra">Psiquiatra</option>

            </select>
        </p>
        <input type="text" class="login-idiomas" autofocus="true"   name="telefono" placeholder="un telefono alternativo (opcional)" />
        <input type="text" class="login-idiomas" autofocus="true" name="direccion" placeholder="una direccion alternativa (opcional)" />
        <textarea type="textarea" class="login-number" autofocus="true" name="motivo" placeholder="Escriba su el motivo de la visita" required ></textarea>
        <input type="date" class="login-email" autofocus="true"  name="fecha" placeholder="selecione una fecha" required />
        <input type="time" class="login-email" autofocus="true" name="hora"  placeholder="selecione una hora" required />
        <div class="checkBox">
            <input type="checkbox" id="ch1" value="first_checkbox" /><label>Acepto los terminos y condiciones, la
                politica de privacidad u el
                tratamiento de datos </label><br>
            <input type="checkbox" id="ch2" value="second_checkbox" />
            <label for="cbox2">Confirmo que tengo la autorizacion para crear una cuenta
            </label>
        </div>
        <button type="submit" name="login" class="btnCrearCuenta">Solicitar y Pagar</button>
    </form>
    
  <!-- inicioSesion--> 
  
<script type="text/javascript">
    $(window).on("scroll", function () {
        if ($(window).scrollTop()) {
            $('.navbar').addClass('white');
        } else {
            $('nav').removeClass('white');
        }
    })
</script>
<script src="/js/main.js"></script>
</body>

</html>