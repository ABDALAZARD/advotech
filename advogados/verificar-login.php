<?php
    include 'autenticacao.php';


session_start();

$oab = $_POST["oab"];
$senha  = md5($_POST["senha"]);

include 'conexao.php';


$sql = "select * from conta where oab ='".$oab."' and senha = '".$senha."'";

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
            $_SESSION["oab"] = $dados['oab'];
            $_SESSION["tipo"] = $dados['tipo'];

if($_SESSION["tipo"] != "ADM"){ 
            header("location: advogados/menu.php"); 
        }else{
                header("location: adm/menu-adm.php");
            }
    }
    else{
        ?><script>
                alert( "OAB e/ou Senha invalida!");
        </script>
        <?php
                header("location: index.php");

        }


}
else{
    
        $msg = "<br>Não existem dados referente a este cliente na base";
        header("location:index.php?msg=".$msg); //redirecionamento em PHP
    
               


}
?>


?>