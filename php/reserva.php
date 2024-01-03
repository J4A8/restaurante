<?php
include_once('basededatos.php');

$nombres=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$personas= $_POST['personas'];


echo "los datos son los siguientes: <br>";
echo "$nombres,$email,$telefono,$fecha, $hora,$personas ";

$conectar=conn();
$sql= "INSERT INTO reservacion(nombre,email,telefono,fecha,hora,personas) VALUES ('$nombres', '$email', '$telefono', '$fecha', '$hora', '$personas')";
$resul= mysqli_query($conectar, $sql) or trigger_error("Query Failed! SQL- Error: " .mysqli_error($conectar), E_USER_ERROR);
echo "$sql";


  