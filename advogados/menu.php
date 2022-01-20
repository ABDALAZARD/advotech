<?php
 include_once "../autenticacao.php";   

?>
<!DOCTYPE html>
  <head>
    <title>Advogado</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">

      <style> 
            
            .title{
                
                    height: 10vh;
                    display: flex;
                    justify-content: center;
                    align-items:center;
            }
       
              
            .body{
            background-color: #DCDCDC ;

            }

            .menu{
              
              margin-left:220px;

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
        <img class="ca" src="../ADVOTECH-LOGO.png">

          <a href="../index.php" class="brand-logo">Advotech</a>


         

    </nav>

  </div>      

      <div class="container">
        <div class="title">
      <h3>Painel do Advogado</h3>
        </div>
      <div class="title">
         
      <p> Seja Bem Vindo(a) Dr(a). <?php echo utf8_encode($_SESSION["nome"]); ?> </p>
      </div>


      <br><br>
      <div class="menu">
      <a href="cadastrar-acao.php" class="btn blue-grey"> Cadastrar de Ação</a>
      <a href="atualizar-acao.php" class="btn blue-grey"> Atualizar Ação</a>
      <a href="configuracao.php" class="btn black"> Configuração</a>
      <a href="../sair.php" class="btn red" >Sair</a>
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