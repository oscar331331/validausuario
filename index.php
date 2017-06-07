<?php 
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $_SESSION["val01"]="ola k ase";
         $otro = "otro ola k ase";
         $_SESSION["val02"] = $otro;
         $_SESSION["val03"]=3;
         
        
        ?>
        <a href="versesion.php">Ver datos de la sesion</a>
    </body>
</html>
