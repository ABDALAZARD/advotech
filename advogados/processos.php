<?php
include_once "../autenticacao.php";  

include_once "../conexao.php";

// conexão com o banco de dados 
 
//verifica a página atual caso seja informada na URL, senão atribui como 1ª página 
$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 

//seleciona todos os itens da tabela 
$cmd1 = "select * from processos where cpf like '".$_SESSION['cpf']."'";            

    
$produtoss = mysqli_query($con, $cmd1); 

//conta o total de itens 
$total = mysqli_num_rows($produtoss); 

//seta a quantidade de itens por página, neste caso, 2 itens 
$registros = 5; 

//calcula o número de páginas arredondando o resultado para cima 
$numPaginas = ceil($total/$registros); 

//variavel para calcular o início da visualização com base na página atual 
$inicio = ($registros*$pagina)-$registros; 

//seleciona os itens por página 

    $cmd = "select * from processos where cpf like '".$_SESSION['cpf']."'  limit ".$inicio.", ".$registros."";
   

$exe = mysqli_query($con, $cmd); 
$total1 = mysqli_num_rows($exe); 
//exibe os produtos selecionados 




?>
<!DOCTYPE html>
	<head>
		<title>Ações</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="../materialize/css/materialize.min.css">

	    <style> 
	         	
            .body{
         		background-color: #DCDCDC ;

            }
   			.boxx{

            width:800px;
            height:200px;
            border:solid 1px;
         	background-color: white ;
            box-shadow: 5px 6px 8px 1px black;
                        
        }
        	.rodape{
                margin-top: 100px;
                margin-left: 300px;
                

            }
             .data{
                margin-top: 100px;
                margin-left: 3000px;
                

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

	        <img class="ca" src="">
	        <a href="show.php" class="brand-logo">Advotech</a>
	     	<a href="sair.php" class="btn red" style="margin-left:1200px;">Sair</a>

	    </div>			

  	</nav>


  		<div class="container">
  			<br><br>
	
<h3>Processos do(a) Dr./Dra <?php echo $_SESSION["nome"] ?></h3>



<br><br>
                
               
                <?php 

                if($total > 0){ 
                    
                while($processo = mysqli_fetch_array($exe)){

	 		?>




            <div class="row">
                <div class="col s3">
                    <p id='data'><font size="1" > <b>Última atualização:</b> <?php echo $processo['data']; ?></font></p>
                </div>
                    <div class="col s9">

                     <p id='proc'><font size="1"><b>Processo:</b> <?php echo $processo['proc']; ?> 
                   </font></p> 
                </div>
            </div>

                    <div class="boxx" id="ir">

                    <div class="row">
                        <div class="col s2" hidden>                    
                        <input type="text" name= 'id' value="<?php echo $produto['id']; ?>" hidden>
                        </div>

                        
                    </div>


                    <div class="row">

	                    <br><div class=" col s9">
	                    	<?php echo "<b>Ação: </b>". $processo['acao'];  ?> 
	                    </div>

	                    <div class=" col s3">
	                    	<?php echo "<b>Advogado: </b>".$processo['adv'];  ?> 
	                    </div>
					</div>
					<div class="row">

	                    <div class="margem col s3">
	                    	<?php echo "<b>Status: </b>".$processo['anda']."<br />";?>
	                     </div>
                     
                    	<div class="margem col s5">
	                    	<?php echo "<b>Tradução: </b>".$processo['trad']."<br />";?>
	                     </div>
	                 </div>
	                 <div class="row">
		                    <div style="margin-left:10px;">
	                    	<?php echo "<b>Explicação: </b>".$processo['descr']."<br />";?>
	                    </div>
                     </div>



                 



                      </div>
                      <br><br><br><br><br><br>

				<?php } ?>
                    </div>
                     

                    

             
                </div>
                <br>
                <div class="rodape">
                <ul class="pagination">
                <?php   
                        for($i = 1; $i < $numPaginas + 1; $i++) { ?>
                                <?php echo "<a href='show.php?pagina=$i' class='btn grey'>".$i."</a> "; 
                        }
                       }else{ echo "Não encontramos nenhum processo e/ou cliente vinculado ao seu código da OAB     :'( <br>Mas não se preocupe, entre em contato com a Advotech e peça ajuda. =D"; }
                ?>  
                  </ul>

                              </div>

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