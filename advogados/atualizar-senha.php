<?php 
    include '../autenticacao.php';

    //Processo de atualização em banco de dados
    //1- Resgatar os dados do form

    $senha = md5($_POST["senha"]); //veio pelo input hidden


    //2- Conectar o PHP ao MYSQL
    //endereço, usuario, senha, nome da base
    include '../conexao.php';

    
    //3- Montar a instrução sql de atualização
    
    $sql = "UPDATE conta set senha='".$senha."' WHERE oab like '".$_SESSION['oab']."'";

    //echo $sql;
   

    //echo $sql;
    //4- Executar a instrução sql
    if(mysqli_query($con,$sql)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }

    //5- Fechar a conexao
    mysqli_close($con);
?>

    
<script>
    alert('<?php echo $msg; ?>');
    location.href="configuracao.php"; //redirecionamento em JS
</script>