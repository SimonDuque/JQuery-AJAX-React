<?php
//Controlamos el login comprobando si el usuario está registrado en la BD
    session_start();
    include('conn.php');
 
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
 
    $query=mysqli_query($conn,"select * from `usuario` where usuario='$usuario' and contrasena='$contrasena'");
 
    if (mysqli_num_rows($query)<1){
        $_SESSION['message']="Login Error. El usuario o contraseña que ha introducido son incorrectos. Inténtelo de nuevo";
        header('location:index.php');
    }
    else{
        $row=mysqli_fetch_array($query);
        $_SESSION['usuarioid']=$row['usuarioid'];
        header('location:home.php');
    }
 
?>