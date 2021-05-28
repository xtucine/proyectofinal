<?php
include('conexion.php');

$correo = $_POST['txtcorreo'];

$queryusuario 	= mysqli_query($conn,"SELECT * FROM usuarios WHERE email = '$correo'");
$nr 			= mysqli_num_rows($queryusuario);
if ($nr == 1)
{
$mostrar		= mysqli_fetch_array($queryusuario);
$enviarpass 	= $mostrar['passwd'];

$paracorreo 		= $correo;
$titulo				= "Recuperar Password";
$mensaje			= "Tu password es: ".$enviarpass;
$tucorreo			= "From: xtucine@gmail.com";

if(mail($paracorreo,$titulo,$mensaje,$tucorreo))
{
	echo "<script> alert('Contraseña enviado');window.location= 'index.html' </script>";
}else
{
	echo "<script> alert('Error');window.location= 'index.html' </script>";
}
}
else
{
	echo "<script> alert('Este correo no existe');window.location= 'index.html' </script>";
}

?>
