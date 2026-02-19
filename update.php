<?php
$conexion = new mysqli("localhost","crud","1234","crud_php");

if($_POST){
$conexion->query("UPDATE usuarios SET
nombre='{$_POST['nombre']}',
email='{$_POST['email']}',
edad='{$_POST['edad']}'
WHERE id={$_POST['id']}");

header("Location:index.php?ok=1");
exit();
}

$u=$conexion->query("SELECT * FROM usuarios WHERE id=".$_GET['id'])->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Editar</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Editar Usuario</h2>

<form method="POST">
<input type="hidden" name="id" value="<?= $u['id'] ?>">
<input name="nombre" value="<?= $u['nombre'] ?>">
<input name="email" value="<?= $u['email'] ?>">
<input name="edad" value="<?= $u['edad'] ?>">
<button>Actualizar</button>
</form>

<a href="read.php"><button>Cancelar</button></a>

</div>
</body>
</html>
