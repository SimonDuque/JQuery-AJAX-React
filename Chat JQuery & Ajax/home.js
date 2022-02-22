$(document).ready(function(){
    displayResult();
    // Función Enviar Mensaje
        $('#enviar_msg').on('click', function(){
            if($('#msg').val() == ""){
                alert('Por favor, primero debes escribir un mensaje');
            }else{
                $msg = $('#msg').val();
                $id = $('#id').val();
                $.ajax({
                    type: "POST",
                    url: "enviar_mensaje.php",
                    data: {
                        msg: $msg,
                        id: $id,
                    },
                    success: function(){
                        displayResult();
                    }
                });
            }	
        });
    });
    //Pasa el valor del ID
    function displayResult(){
        $id = $('#id').val();
        $.ajax({
            url: 'enviar_mensaje.php',
            type: 'POST',
            async: false,
            data:{
                id: $id,
                res: 1,
            },
            success: function(response){
                $('#result').html(response);
            }
        });
    }