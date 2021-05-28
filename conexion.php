<?php
$conn = new mysqli("localhost","root","","proyectofinal");
//$conn = new mysqli("localhost","id16758619_root","Xtucine1234.","id16758619_proyectofinal");

	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>
