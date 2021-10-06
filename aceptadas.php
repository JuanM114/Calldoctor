<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "call";

//crear conexion con BD
$conex = mysqli_connect($servername, $username, $password, $dbname);

// verificar conexion con la BD
if (!$conex) {
    die ("conexion fallida: " . mysqli_connect_error());
}



$usuarios = "SELECT * FROM paciente, solicitud_medica, usuario WHERE (idusuario1 = Id and Id = idusuario3) AND estado = 'aceptada'";


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, 
    maximum-scale=1.0, minimum-scale=1.0">
    <title>doctores y pacientes activos</title>
    <link rel="stylesheet" href="css/tablasolicitud.css">
</head>
<body>
    <div class="container-table">
        <div class="table__title">Datos de la consulta</div>
        <div class="table__header">Nombre de paciente</div>
        <div class="table__header">Direccion</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Ciudad</div>
        <div class="table__header">fecha</div>
        <div class="table__header">hora</div>
        <div class="table__header">motivo</div>
        <div class="table__header">especialidad</div>
        <div class="table__header">Estado</div>


<?php $resultado = mysqli_query($conex, $usuarios);
while ($row = $resultado->fetch_array())  { 
    ?> 


       <div class="table__item"><?php echo $row["nombre"];?></div>
       <div class="table__item"><?php echo $row["Direccion"];?></div>
       <div class="table__item"><?php echo $row["Telefono"];?></div>
       <div class="table__item"><?php echo $row["Ciudad"];?></div>
       <div class="table__item"><?php echo $row["fecha"];?></div>
       <div class="table__item"><?php echo $row["hora"];?></div>
       <div class="table__item"><?php echo $row["motivo"];?></div>
       <div class="table__item"><?php echo $row["especialidad"];?></div>
        <div class="table__item"><?php echo $row["estado"];?></div>

<?php } mysqli_free_result($resultado);?>

    </div>
    <script src="js/confirmacionsolicitud.js"></script>
    <div class="table__header">
    <a href="RegistroCentroMedico.php"  class="table__item__link">volver</a>
    </div> 
 </body>
</html>