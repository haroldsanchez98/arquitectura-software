<?php 
    include("connection.php");
    $con=connection();

    // se crea la variable id y se trae la infomacion con GET
    $id=$_GET['id'];

    $sql="SELECT * FROM usuario WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    // esta es la fila definida en el ciclo while 
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style0.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <input type="text" name="lastname" placeholder="Apellidos" value="<?= $row['lastname']?>">
                <input type="text" name="username" placeholder="Username" value="<?= $row['username']?>">
                <input type="text" name="password" placeholder="Password" value="<?= $row['password']?>">
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>