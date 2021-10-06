<?php
include("conexion.php");
$id = $_GET['id'];

$eliminar = "DELETE FROM solicitud_medica WHERE idSolicitud_medica = '$id' ";

$resultado=mysqli_query($conex, $eliminar);

if ($resultado){
   header("location: solicitudes.php");
} else {
    echo "<script>alert('No se a podido eliminar el registro'); window.history.go(-1);</script>";
}
?>