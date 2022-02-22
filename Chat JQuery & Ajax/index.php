<!DOCTYPE html>
<html>
<head>
<title>Chat</title>
<link rel="stylesheet" type="text/css" href="estilosformulario.css">
</head>
<body>
<!-- Formulario -->
<form class="formulario" method="POST" action="login.php">
<h2>Inicio de Sesión</h2>
 Usuario: <input type="text" name="usuario"> <br><br>
 Contraseña: <input type="password" name="contrasena"> <br><br>
 <input type="submit" value="Login">
</form><br>
<!-- Si inicia sesión imprime el mensaje -->
<?php
    session_start();
    if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    }
?>
</body>
</html>