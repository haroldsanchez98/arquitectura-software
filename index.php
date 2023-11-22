<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM usuario";
// esta funcion permirmite hacer consultas MySQL
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style0.css" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/2827/2827348.png">
    <title>CRUD</title>
</head>
<a href="../index.html" class="inicio">Regresar al Login</a>
<body>

    <div class="users-form">
        <h1>Registrar Clientes</h1>
        <!-- POST envia datos al servidor con el protocolo http -->
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre" required>
            <input type="text" name="lastname" placeholder="Apellidos" required>
            <input type="text" name="username" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <input type="email" name="email" placeholder="Correo" required>

            <input type="submit" value="Agregar">
        </form>
    </div>

    <div class="users-table">
        <h2>Clientes registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Correo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- se crea un bucle while para que vaya imprimiendo usuarios nuevos -->
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['username'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['email'] ?></th>

                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>