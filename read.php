<?php
$conexion = new mysqli("localhost","crud","1234","crud_php");
$r=$conexion->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html>
<head>
<title>Usuarios</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="table">

<h2>Usuarios</h2>

<table>
<tr><th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th><th>Acciones</th></tr>

<?php while($f=$r->fetch_assoc()){ ?>
<tr>
<td><?= $f['id'] ?></td>
<td><?= $f['nombre'] ?></td>
<td><?= $f['email'] ?></td>
<td><?= $f['edad'] ?></td>
<td>
<a href="update.php?id=<?= $f['id'] ?>"><button class="edit">Editar</button></a>
<a onclick="return confirm('Eliminar?')" href="delete.php?id=<?= $f['id'] ?>">
<button class="del">Eliminar</button></a>
</td>
</tr>
<?php } ?>

</table>

<br><a href="index.php"><button>Volver</button></a>

</div>
</body>
</html>
