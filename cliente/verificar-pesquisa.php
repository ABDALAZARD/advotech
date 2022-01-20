<?php


session_start();

$cpf = $_POST["cpf"];
$senha  = md5($_POST["senha"]);

include '../conexao.php';


$sql = "select * from cliente where cpf ='".$cpf."' and senha = '".$senha."'";

$result = mysqli_query($con, $sql);


$total = mysqli_num_rows($result);


if($total > 0)
{
    $dados = mysqli_fetch_array($result);
    if(!strcmp($senha, $dados["senha"]))
    {
            $_SESSION["id"] = $dados['id'];
            $_SESSION["nome"] = $dados['nome'];
            $_SESSION["cpf"] = $dados['cpf'];
            $_SESSION["senha"] = $dados['senha'];
            $_SESSION["email"] = $dados['email'];
            $_SESSION["telefone"] = $dados['telefone'];
            $_SESSION["adv"] = $dados['adv'];

            header("location: show.php");
    }
    else{
        ?><script>
                alert( "CPF e/ou Senha invalida!");
        </script>
        <?php
                header("location: pesquisar.php");

        }


}
else{
    
        $msg = "Não existem dados referente a este cliente na base";
        header("location:pesquisar.php?msg=".$msg); //redirecionamento em PHP
    
               


}
?>


?>