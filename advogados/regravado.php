<?php
include '../conexao.php';

include '../autenticacao.php';





$proc = $_GET['proc'];
$oab = $_GET['oab'];
$anda = $_GET['anda'];
$trad = $_GET['trad'];
$descr = $_GET['descr'];
$status = $_GET['status'];


###############################################################################################################################
date_default_timezone_set('America/Sao_Paulo');

$hoje = date("H:i:s ... d/m/y"); 
###############################################################################################################################   




    $sql = "UPDATE processos set anda='".$anda."', trad='".$trad."', descr='".$descr."', data='".$hoje."', local='".$status."'  
    where proc='".$proc."' and adv ='".$oab."'";

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
    location.href="atualizar-acao.php"; //redirecionamento em JS
</script>