<?php
include("connection.php");
$con = connection();

$id = null;
// POST está asignando el valor recibido a través de un formulario HTML
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// sentencia SQL
$sql = "INSERT INTO usuario VALUES('$id','$name','$lastname','$username','$password','$email')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>