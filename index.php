<?php $ok = isset($_GET['ok']); ?>
<!DOCTYPE html>
<html>
<head>
<title>CRUD</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<?php if($ok){ ?><div class="msg">Operación correcta ✔</div><?php } ?>

<h2>Crear Usuario</h2>

<form action="create.php" method="POST">
<input name="nombre" placeholder="Nombre" required>
<input name="email" type="email" placeholder="Email" required>
<input name="edad" type="number" placeholder="Edad" required>
<button>Guardar</button>
</form>

<a href="read.php"><button>Ver Usuarios</button></a>

</div>
</body>
</html>