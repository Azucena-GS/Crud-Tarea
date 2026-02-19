<?php
include("conexion.php");
$conexion->query("DELETE FROM usuarios WHERE id=".$_GET['id']);

header("Location:index.php?ok=1");
exit();
?>
