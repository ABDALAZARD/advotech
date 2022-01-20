<?php
 ini_set('default_charset','UTF-8');
?>
<?php
    session_start();

    if(isset($_SESSION["nome"])){
        header("location:show.php");
    }
?>
<!DOCTYPE html>
	<head>
		<title>CLIENTE</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../materialize/css/materialize.min.css">

	    <style> 
	         	.teste1{
         		margin-bottom:200px;
                margin-left: 1200px;

                color: black;

            }
            .container{
                
                    height: 10vh;
                    display: flex;
                    justify-content: center;
                    align-items:center;
            }
				.container1{
                
                    height: 50vh;
                    display: flex;
                    justify-content: center;
                    align-items:center;
            }
            	.login{
            		margin-top: 200px;
                    width: 340px;
                    height: 360px;
                    background-color: white;


            }
            .body{
         		background-color: #DCDCDC ;

            } .ca{
                margin-right: 100px;
                margin-left: 10px;
                width: 85px;
                height: 65px;

                color: white;

            }


    </style>
  </head>
  <body class="body">
  <nav>
      <div class="nav-wrapper grey">
        <img class="ca" src="../ADVOTECH-LOGO.png">

	        <a href="pesquisar.php" class="brand-logo">Advotech</a>

	        <a href="../index.php" class="btn blue-grey" style="margin-left:1150px;">Login Advogado</a>

	       

  	</nav>

  </div>			

  		<div class="container">
			<h3>Área do cliente</h3>
			<br><br><br><br>
		</div>
		<div class="container1">
		
			

				<div class="login card-panel">        
				        <h3>Procurar Ação</h3>
				        <form action="verificar-pesquisa.php" method="POST">
				        	<div class="row">
				        	<div class="col s6">
				            <label>CPF do cliente</label>
				            <input type="text" maxlength="14" name="cpf" id="cpf" required>
				        	</div>
				        	</div>
				        	<div class="row">
				        	<div class="col s6">
				            <label>Senha</label>
				            <input type="password" name="senha" id="senha" required>
				            </div>
				        	</div>
				            <input type="submit" value="Verificar" class="btn grey">
				            <br>
				        </form>

				            <p> 
				                <?php 
				                if(isset($_GET["msg"])){ 
				                echo $_GET["msg"];
				                }
				                ?>
				            </p>
				</div>


		</div>


		 <script src="../materialize/js/materialize.min.js">   </script>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../materialize/js/materialize.min.js"></script> 
        <script src="../js/maskedinput-1.4.1.js"></script> 
        <script src="../js/jquery.validate.js"></script> 
        
        <script>
            $(document).ready(function(){

               
                $('#cpf').mask("999.999.999-99");

                $('form').validate();

            });
        </script>

	</body>
</html>