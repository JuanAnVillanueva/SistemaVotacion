<?php
include 'conexcion.php';
$nombre = $_GET['nombre'];
$precio = $_GET['precio'];
$descrip = $_GET['descripcion'];

$ingresar = "insert into producto(precio,nombre,descripcion) values ($precio, '$nombre', '$descrip')";
if ($conexion->query($ingresar) === TRUE) {
    header('location:show.php');
  } else {
    echo "Error: " . $ingresar . "<br>" . $conexion->error;
  }
?>