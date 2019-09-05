<?php
session_start();
if(!isset($_SESSION['id_usuario']))
{
    header("location: login.php");
    exit;
}else{

    require_once 'classes/usuarios.php';
    $u = new Usuario;
}
echo "Logado com Sucesso"
?>
