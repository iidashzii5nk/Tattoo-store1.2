<?php
include('servicios/_conexion.php');
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$contraseña	 = $_POST["contraseña"];

$insertar = "INSERT INTO usuario(nomusu, apeusu, emausu, pasusu, estado)
VALUES('$nombre', '$apellido', '$email', '$contraseña', 1)";

$resultado = mysqli_query($con, $insertar);

if ($resultado) {

    echo "<script>alert('Usuario creado exitosamente');
    window.location='login.php'
     </script>";
}else{
	echo "<script>alert('No se pudo registrar');window.history.go(-1);</script>";

}

