<?php
$proc = $_GET['processo'];
$id = $_GET['id'];


include '../conexao.php';

$sql = "Delete from processos where proc= '".$proc."' and id_advogado= '".$id."'";

if(mysqli_query($con,$sql)){
    $msg = "Dados excluídos com sucesso!";
}else{
    $msg = "Erro ao excluir dados!";
}
?>

<script>
alert('<?php echo $msg; ?>');
location.href="atualizar-acao.php"; //redirecionamento em JS
</script>

<?php mysqli_close($con);
?>


