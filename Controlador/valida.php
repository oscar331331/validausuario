<?php
include '../librerias.php';
session_start();
$oUsuario=new Usuario($_REQUEST["usuario"],$_REQUEST["password"]);

if($oUsuario->VerificaAcceso())
{
    echo "Todo ok";
    $_SESSION["USR"] = $oUsuario;
}
else
    echo "Todo mal";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

