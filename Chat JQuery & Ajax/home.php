<?php
    //Controlamos el inicio de sesión.
    include('conn.php');
    session_start();
    if (!isset($_SESSION['usuarioid']) ||(trim ($_SESSION['usuarioid']) == '')) {
    header('location:index.php');
    exit();
    }
 
    $uquery=mysqli_query($conn,"select * from `usuario` where usuarioid='".$_SESSION['usuarioid']."'");
    $urow=mysqli_fetch_assoc($uquery);
?>
<!DOCTYPE html>
<html>
<head>
<title>Chat</title>

</head>
<body>
<div>
    <h4>Bienvenido, <?php echo $urow['tu_nombre']; ?> <a href="logout.php">Logout</a></h4>
    <?php
        $query=mysqli_query($conn,"select * from `chat_sala`");
        while($row=mysqli_fetch_array($query)){
            ?>
                <div>
                Chat Sala Nombre: <?php echo $row['chat_sala_nombre']; ?><br><br>
                </div>
                <div id="result" style="overflow-y:scroll; height:300px;"></div>
                <form>
                    <input type="text" id="msg">
                    <input type="hidden" value="<?php echo $row['chat_sala_id']; ?>" id="id">
                    <button type="button" id="enviar_msg">Enviar</button>
                </form>
            <?php
        }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="home.js"></script>
</body>
</html>