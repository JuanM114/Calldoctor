<?php
include("conexion.php");
$id = $_GET['id'];

$eliminar = "DELETE FROM paciente WHERE idPaciente = '$id' ";

$resultado=mysqli_query($conex, $eliminar);

if ($resultado){
   header("location: resultados.php");
} else {
    echo "<script>alert('No se a podido eliminar el registro'); window.history.go(-1);</script>";
}
?>