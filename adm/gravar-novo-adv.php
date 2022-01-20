<?php
 include_once "../autenticacao.php";  
 include_once "../conexao.php";   
 
 ini_set('default_charset','UTF-8');

$adv = ucwords($_POST['adv']);
$oab = ucwords($_POST['oab']);
$cpf = $_POST["cpf"];
$senha = md5($_POST["senha"]);
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$tipo = "advogado";


$sql = "INSERT INTO conta VALUES(null, '".$adv."','".$cpf."','".$email."','".$oab."','".$senha."','".$telefone."','".$tipo."')";



if(mysqli_query($con, $sql)){
		
		$msg = "Advogado cadastrado com sucesso!"; 

?>

	<script>
		alert('<?php echo $msg; ?>');

    location.href="menu.php"; //redirecionamento em JS
</script>

<?php 

}else{
	
		$msg = "Erro ao cadastrar advogado. Favor, revise e tente novamente."; 



?>

	<script>
		alert('<?php echo $msg; ?>');

    location.href="cadastrar-adv.php"; //redirecionamento em JS
</script>


<?php

}




?>