<?php
 $conexion = mysqli_connect("localhost", "root", "", "call");


 $Esp = $_POST["Especialidad"];
 $nom = $_POST["nombre"];
 $cor = $_POST["correo"]; 
 $tel = $_POST["telefono"];




  if ($_FILES["certificado"]) {
	  $nombre_base = basename($_FILES["certificado"]["name"]);
	  $nombre_final = date("m-d-y")."---".date("h-i-s")."-" . $nombre_base;
	  $ruta = "archivos/" . $nombre_final;
	  $subirarchivo = move_uploaded_file($_FILES["certificado"]["tmp_name"], $ruta);

if ($_FILES["tarjeta"]) {
	$nombrebase = basename($_FILES["tarjeta"]["name"]);
	$nombrefinal = date("m-d-y")."-".date("h-i-s")."-" . $nombrebase;
	$cargar = "tarjeta/" . $nombrefinal;
	$subirarchivo = move_uploaded_file($_FILES["tarjeta"]["tmp_name"], $cargar);

	  if($subirarchivo){
		  $insertarsql ="INSERT INTO medicos(Especialidad, nombre, correo, telefono, certificado, Tarjeta, idusuario) VALUES ('$Esp', '$nom', '$cor', '$tel',  '$ruta', '$cargar', '$idu')";

		  $resultado = mysqli_query($conexion, $insertarsql);

		  if($resultado) {

			echo "<script>alert('Se hizo el registro con exito'); window.location='solicitudes.php'</script>";
		  } else {
			echo "<script>alert('No se pudo realizar el registro'); window.location='RegistroCentroMedico.php'</script>";
		  }
	  }
  }
  }

?>