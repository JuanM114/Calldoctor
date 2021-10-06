<?php
include("conexion.php");

$usuarios = "SELECT * FROM paciente ";



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>doctores y pacientes activos</title>
    <link rel="stylesheet" href="css/tabla.css">
</head>
<body>


<br>

    <div class="container-table">
        <div class="table__title">Datos del medico</div>
      
        <div class="table__header">Nombre</div>
        <div class="table__header">Fecha nacimiento</div>
        <div class="table__header">Direccion</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Ciudad</div>
        <div class="table__header">Opciones </div>

        <?php
if(isset($_GET['enviar']));
$busqueda=$_GET['busqueda'];

$consulta = $conex->query("SELECT * FROM paciente WHERE nombre  LIKE '%$busqueda%'");

while ($row = $consulta->fetch_array()){ ?>
     
       <div class="table__item"><?php echo $row["nombre"];?></div>
       <div class="table__item"><?php echo $row["fecha_nacimiento"];?></div>
       <div class="table__item"><?php echo $row["Direccion"];?></div>
       <div class="table__item"><?php echo $row["Telefono"];?></div>
       <div class="table__item"><?php echo $row["Ciudad"];?></div>
       <div class="table__item">
           <a href="eliminarmedico.php?id=<?php echo $row["idPaciente"];?>" class="table__item__link">Eliminar</a></div>
<?php } mysqli_free_result($consulta);?>
    </div>
    <script src="js/confirmacion.js"></script>
    <div class="table__header">
    <a href="resultadosmedico.php"  class="table__item__link">volver</a>
    </div> 
 </body>
</html>
