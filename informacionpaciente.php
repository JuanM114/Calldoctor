<?php
include('conexion.php');

$nombre = $_POST['usuario'];
$fecha = $_POST['nacimiento'];
$dir = $_POST['direccion'];
$tele = $_POST['numero'];
$ciuda = $_POST['Lista'];

$auto = "SELECT Id FROM usuario ORDER BY Id DESC LIMIT 1 ";

$sql1 = "INSERT INTO paciente (nombre, fecha_nacimiento, Direccion, Telefono, Ciudad, idusuario1)
 VALUES  ('$nombre', '$fecha', '$dir', '$tele', '$ciuda', '$auto')"; //'".$auto."'


$resultado = mysqli_query($conex, $sql1);
				
if($resultado) {

echo "<script>alert('Se hizo el registro con exito'); window.location='vistamedica.php'</script>";
} else {

}
?>