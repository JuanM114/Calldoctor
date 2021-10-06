<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "call";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_GET['id'];

$sql = "UPDATE solicitud_medica SET estado='rechazada' WHERE idsolicitud_medica= '$id'";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Se rechazo esta solicitud'); window.location='aceptadas.php'</script>";
} else {
	echo "<script>alert('NO se  aceptado'); window.history.go(-1);</script>";
}

$conn->close();
?>