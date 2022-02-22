<?php
//Establece la conexión
$conn = mysqli_connect("localhost","root","","chat");
 
// Comprueba la conexión
if (mysqli_connect_errno())
  {
  echo "Error al conectar con MySQL: " . mysqli_connect_error();
  }
?>