<?php
//Establece conexión
    include ('conn.php');
    //Inicia sesión
    session_start();
    //Se guardan los correspondientes valores en las tablas de la Base de Datos 
    if(isset($_POST['msg'])){		
        $msg = addslashes($_POST['msg']);
        $id = $_POST['id'];
        mysqli_query($conn,"insert into `chat` (chat_sala_id, chat_msg, usuarioid, chat_fecha) values ('$id', '$msg' , '".$_SESSION['usuarioid']."', NOW())") or die(mysqli_error());
    }
?>
<?php
    if(isset($_POST['res'])){
        $id = $_POST['id'];
    ?>
    
    <?php
        $query=mysqli_query($conn,"select * from `chat` left join `usuario` on usuario.usuarioid=chat.userid where chat_sala_id='$id' order by chat_fecha asc") or die(mysqli_error());
        while($row=mysqli_fetch_array($query)){
    ?>	
        <div>
            <?php echo date('h:i A',strtotime($row['chat_fecha'])); ?><br>
            <?php echo $row['tu_nombre']; ?>: <?php echo $row['chat_msg']; ?><br>
        </div>
        <br>
    <?php
        }
    }	
?>