<?php
include_once('basededatos.php');

$nombre = $_POST['nombre'];
$email = $_POST['mail'];
$asunto = $_POST['asunto'];
$mensaje= $_POST['mensaje'];



echo "los datos son los siguientes: <br>";
echo "$nombre,$email,$asunto,$mensaje";

$conectar=conn();
$sql= "INSERT INTO contactanos(nombre,gmail,asunto,mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')";
$resul= mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL- Error: " .mysqli_error($conectar), E_USER_ERROR);
echo "$sql";


?>
