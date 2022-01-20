<?php 

session_start(); 

//se NÃO (!) existir a sessao nome (que é registrada no verificar-login.php)
//if($_SESSION["nome"] == null){
if(!isset($_SESSION["nome"])){

    session_destroy();
    $msg = "Acesso negado";
    header("location:pesquisar.php?msg=".$msg); //redirecionamento em PHP

}else{}

?>