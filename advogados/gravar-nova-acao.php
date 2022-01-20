<?php
 include_once "../autenticacao.php";  
 include_once "../conexao.php";   
 
 ini_set('default_charset','UTF-8');

$processo = ucwords($_POST['processo']);
$autor = ucwords($_POST['autor']);
$reu = ucwords($_POST['reu']);
$cpf = $_POST["cpf"];
$senha = md5($_POST["senha"]);
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$status = "Em andamento";
$id_advogado = $_SESSION['id'];

date_default_timezone_set('America/Sao_Paulo');

$hoje = date("H:i:s ... d/m/y");    

$acao =  $autor." X ".$reu;     

$anda = ("Em abertura");
$trad = ("Processo entregue ao TRT");
$descr = ("Processo foi entregue ou enviado pelo sistema para o tribunal responsável pela futura audiência");
$tipo = "cliente";
$oab = $_SESSION['oab'];

$sql = "INSERT INTO processos VALUES(null, '".$acao."','".$autor."','".$cpf."','".$oab."','".$processo."','".$status."','".$anda."','".$trad."','".$descr."','".$hoje."', '".$id_advogado."')";



$sql1 = "INSERT INTO cliente VALUES(null, '".$autor."','".$cpf."','".$senha."','".$email."','".$telefone."','".$oab."','".$tipo."')";

$sql2 = "Select * from cliente where cpf like '".$cpf."'";
$rez = mysqli_query($con, $sql2);
$a = mysqli_fetch_array($rez);
$num = mysqli_num_rows($rez);

$sql3 = "Select * from processos where proc like '".$processo."'";
$rez2 = mysqli_query($con, $sql3);
$num2 = mysqli_num_rows($rez2);

if($num2 == 0){
if(mysqli_query($con, $sql)){
	if($num == 0){
		mysqli_query($con, $sql1);
		}
		$msg = "Processo publicado com sucesso!"; 



?>

	<script>
		alert('<?php echo $msg; ?>');

    location.href="menu.php"; //redirecionamento em JS
</script>

<?php 

}else{
	
		$msg = "Erro ao publicar ação. Favor, revise e tente novamente."; 



?>

	<script>
		alert('<?php echo $msg; ?>');

    location.href="cadastrar-acao.php"; //redirecionamento em JS
</script>


<?php

}}else{
$msg = "Processo já cadastrado."; ?>
	<script>
		alert('<?php echo $msg; ?>');

    location.href="menu.php"; //redirecionamento em JS
</script>
<?php
}




?>