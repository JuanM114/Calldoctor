
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
	<link rel="stylesheet" href="css/estilosInicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>


<body>

   <form action="controller_login.php" method="post">
   <h1 class="animate__animated animate__backInLeft">Registrarse como paciente</h1>
   <p>Ingrese su numnero de identificacion <input type="text" name="usuario" placeholder="ingrese su nombre" ></p>

   <p>Contraseña <input type="password"  name="pas" placeholder="ingrese su contraseña"></p>
   
   <p>Tipo de usuario:
    <select type="text" name="tipo">
        <option value="Paciente">Paciente </option>

    </select>
    </p>
	<input type="hidden" name="registrarse" value="registrarse">
			<button class="w3-btn w3-green">Aceptar</button>
   
   </form> 
</body>
</html>