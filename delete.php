<?php
$conexion = new mysqli("localhost","crud","1234","crud_php");
$conexion->query("DELETE FROM usuarios WHERE id=".$_GET['id']);

header("Location:index.php?ok=1");
exit();
?>
