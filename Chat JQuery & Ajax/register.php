<?php
//Registrar un usuario nuevo en la BD 
    session_start();
    include('conn.php');
 
    $usuario=$_POST['usuario'];
    $contrasena=$_POST['contrasena'];
 
    $query=mysqli_query($conn,"INSERT INTO `usuario` (`usuario`, `contrasena`) VALUES
    ('$usuario', '$contrasena')");
 
    if(empty($usuario && $contrasena && $tu_nombre)){
        $_SESSION['message']="Register Error. El usuario, nombre o contraseña no pueden estar vacíos";
        header('location:index.php');
    }
    else{
        $row=mysqli_fetch_array($query);
        $_SESSION['usuarioid']=$row['usuarioid'];
        header('location:home.php');
    }
 
?>