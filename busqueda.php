<?php
include("conexion.php");

$usuarios = "SELECT * FROM medicos ";



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>doctores y pacientes activos</title>
    <link rel="stylesheet" href="css/tablamedicos.css">
</head>
<body>
    <form action="" method="get">
     <input type="text" name="busqueda"><br>
     <input type="submit" name="enviar" value="buscar">
</form>

<br>

    <div class="container-table">
        <div class="table__title">Datos del medico</div>
      
        <div class="table__header">Nombre</div>
        <div class="table__header">Especialidad</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Certificado medico</div>
        <div class="table__header">Tarjeta profesional</div>
        <div class="table__header">Opciones </div>

        <?php
if(isset($_GET['enviar']));
$busqueda=$_GET['busqueda'];

$consulta = $conex->query("SELECT * FROM medicos WHERE nombre  LIKE '%$busqueda%'");

while ($row = $consulta->fetch_array()){ ?>
     
       <div class="table__item"><?php echo $row["nombre"];?></div>
       <div class="table__item"><?php echo $row["especialidad"];?></div>
       <div class="table__item"><?php echo $row["correo"];?></div>
       <div class="table__item"><?php echo $row["telefono"];?></div>
       <div class="table__item"><?php echo $row["certificado"];?></div>
       <div class="table__item"><?php echo $row["tarjeta"];?></div>
       <div class="table__item">
           <a href="eliminarmedico.php?id=<?php echo $row["idMedico"];?>" class="table__item__link">Eliminar</a></div>
<?php } mysqli_free_result($consulta);?>
    </div>
    <script src="js/confirmacion.js"></script>
    <div class="table__header">
    <a href="resultadosmedico.php"  class="table__item__link">volver</a>
    </div> 
 </body>
</html>
