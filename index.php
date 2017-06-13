<?php 
session_start();
include 'librerias.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="<?=URL?>/js/jquery-3.2.1.min.js" type="text/javascript"/></script>
        
    </head>
    <body>
        <?php
         if(!isset($_SESSION["USR"]))
         {
        ?>
        
        <form method="POST" id="formu">
            <label>Usuario:</label> <input type="text" name="usuario" id="usuario">
            <br><label>Password:</label> <input type="password" name="password" id="password">
            <br><br><input id="enviar" type="button" value="Enviar">
            <div id ="msjweb"></div>
        </form>
        <?php 
         }
         
         else
         {
         ?>
        
        <a href="<?=URL?>/controlador/cerrarsesion.php">CERRAR SESION</A>
        
        <?php
        }
        ?>
    </body>
    
    <script type="text/javascript">
        $(document).ready(function(){
            
            $("#enviar").click(function(){
                if($("#usuario").val()== "" || $("#password").val()=="")
                {
                    alert("Debe ingresar usuario y clave");
                }
                else
                {
                    $.ajax({url:"<?=URL ?>/controlador/valida.php"
                        ,type:"post"
                        ,data:{'usuario':$("#usuario").val(),
                        'password':$("#password").val()},
                    success:function(resweb){
                        $('#msjweb').html(resweb);
                      }  
                    });
                
                }
            }); // click del boton    
            
        }); //ready del documento
    </script>
    
</html>
