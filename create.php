<?php
$conexion = new mysqli("localhost","crud","1234","crud_php");

$conexion->query("INSERT INTO usuarios(nombre,email,edad)
VALUES('{$_POST['nombre']}','{$_POST['email']}','{$_POST['edad']}')");

header("Location:index.php?ok=1");
exit();
?>