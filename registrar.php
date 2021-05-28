<?php
//Para registrar
include('conexion.php');

$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];
$usu 	= $_POST["txtnombre"];

$queryusuario 	= mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '$correo'");
$nr 			= mysqli_num_rows($queryusuario);

if ($nr == 0)
{
	$queryregistrar = "INSERT INTO usuarios(email, passwd, nombreusuario) values ('$correo','$pass','$usu')";


if(mysqli_query($conn,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $usu');window.location= 'index.html' </script>";
}
else
{
	echo "Error: " .$queryregistrar."<br>".mysqli_error($conn);
}

}
else
{
		echo "<script> alert('No puedes registrar este correo: $correo');window.location= 'index.html' </script>";
}

?>
