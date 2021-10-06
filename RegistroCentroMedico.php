<?php 
require_once('usuario.php');
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: indexmedico.php');
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/registroCentroMedico.css"  />
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Registro</title>
</head>

<body>
    <nav class="navbar">
        <a href="index.html"><img src="img/logoCallDoctorletra.png" /></a>
        <ul class="lista-sm">
         <form class="w3-btn w3-green" action="controller_login.php" method="post">
		 <input type="hidden" class="w3-btn w3-green" name="salir" value="salir">
		 <button class="w3-btn w3-green">Salir</button>
         </form>
        </ul>
    </nav>
    <section class="principal">
        <h1>Complete los datos</h1>
        <h4>Estos datos son privados.</h4>
        <p>
            (no aparecerán en ningún momento dentro del perfil del medico).
            Además, con usted nos contactaremos para la verificación de la 
            información
        </p>
    </section>
    <section class="Datos">
        <img src="img/fondoAboutAzul.png" />
    </section>
    <form class="login-form" name="formulario" method="POST" action="Datosmedico.php" role="form" enctype="multipart/form-data">
        <p>
            <select name="Especialidad" id="especialidad" name="especialidad" class="selec">
                <option value="1">Elija su especilidad</option>
                <option value="Medico general">Medico general</option>
                <option value="Optometra">Optometra </option>
                <option value="Pediatra">Pediatra</option>
                <option value="Odontologo">Odontologo</option>

            </select>
        </p>
        <input type="text" class="login-number" autofocus="true" required="true" id="id" name="nombre" placeholder="Ingrese su nombre" />
        </p>

        <input type="email" class="login-number" autofocus="true" required="true" id="id" name="correo" placeholder="Direccion de correo electronico" />
        </p>
        <p class="certificadoP">
        Subir tarjeta profesional:
        <input type="file" class="certificado"  name="tarjeta" required="true" placeholder="Suba su tarjeta profesional" />
        </p>
        <p class="certificadoP">
        Subir certificado medico:
        <input type="file" class="foto"  name="certificado" required="true" placeholder="Suba su certificado que lo Verifica como Doctor" />
        </p>
      
        <input type="tel" class="login-number" autofocus="true" required="true" id="id" name="telefono" placeholder="Escriba su numero de telefono" />
        <div class="checkBox">
            <input type="checkbox" id="ch1" value="first_checkbox" /><label>Acepto los terminos y condiciones, la
                politica de privacidad u el
                tratamiento de datos </label><br>
            <input type="checkbox" id="ch2" value="second_checkbox" />
            <label for="cbox2">Confirmo que tengo la autorizacion para crear una cuenta para
                este centro
            </label>
        </div>
        <button type="submit" name="login" class="btnCrearCuenta">Registrar</button>
    
    </form>
   

    <script type="text/javascript">
        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $(".navbar").addClass("white");
                $(".navbar ul li a").addClass("letraNegra");
            } else {
                $(".navbar").removeClass("white");
                $(".navbar ul li a").removeClass("letraNegra");
            }
        });
    </script>
    <script src="/js/main.js"></script>
</body>
</html>
