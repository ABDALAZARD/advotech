<?php
 ini_set('default_charset','UTF-8');

    session_start();

    if(isset($_SESSION["nome"])){


    	if($_SESSION["tipo"] != "ADM"){ 
        header("location:advogados/menu.php");
    }else{
    	        header("location:adm/menu.php");}


    }
?>
<!DOCTYPE html>
	<head>
		<title>CLIENTE</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="materialize/css/materialize.min.css">

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

            }
             .ca{
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
	    	<img class="ca" src="ADVOTECH-LOGO.png">
	        <a href="index.php" class="brand-logo">Advotech</a>

	        <a href="cliente/pesquisar.php" class="btn blue-grey" style="margin-left:1150px;">Login Cliente</a>

	       

  	</nav>

  </div>			

  		<div class="container">
			<h3>Área do Advogado</h3>
			<br><br><br><br>
		</div>
		<div class="container1">
		
			

				<div class="login card-panel">        
				        <h4>Acesso ao sistema</h4>
				        <form action="verificar-login.php" method="POST">
				        	<div class="row">
				        	<div class="col s6">	
				        	<label>OAB</label>
				            <input type="text" maxlength="9" name="oab" id="oab" required>
				        	</div>
				        	</div>
				        	<div class="row">
				        	<div class="col s6 a">
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


		 <script src="materialize/js/materialize.min.js">   </script>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script> 
        <script src="js/maskedinput-1.4.1.js"></script> 
        <script src="js/jquery.validate.js"></script> 
        
        <script>
            $(document).ready(function(){
				$.mask.definitions['h'] = "[A-Z0-9]";
                $('#oab').mask("hh-hhhhhh");

                $('form').validate();

            });
        </script>

	</body>
</html>