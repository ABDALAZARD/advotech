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
      <h3>Cadastrar Ação</h3>
        </div>
      <form action="gravar-nova-acao.php" METHOD="POST">
        <div class="row">
           
            <div class="col s6">
              <label>Nº de processo:</label>
              <input type="text" name="processo" id ="processo" required>
            </div>
            <div class="col s3">
              <label>CPF:</label>
              <input type="text" name="cpf" id ="cpf" required>
            </div>
          </div>
            <div class="row">
            <div class="col s3">
              <label>Autor:</label>
              <input type="text" name="autor" id ="autor" required>
            </div>           
            <div class="col s3">
              <label>Réu:</label>
              <input type="text" name="reu" id ="reu" required>
            </div>
            <div class="col s3">
              <label>Senha:</label>
              <input type="password" name="senha" id ="senha" required>
            </div>
        </div>  
        <div class="row">
            <div class="col s3">
              <label>E-mail:</label>
              <input type="email" name="email" id ="email" required>
            </div>  
            <div class="row">
            <div class="col s3">
              <label>Telefone:</label>
              <input type="text" name="telefone" id ="telefone" required>
            </div>  
          </div>
         <div class="row">
            <div class="col s3">
                <input type="submit" class="btn black" style="margin-left:600px;" value="Publicar">
            </div>
        </div> 

        </div>
       
</form>








    </div>
        

      

        



     <script src="../materialize/js/materialize.min.js">   </script>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../materialize/js/materialize.min.js"></script> 
        <script src="../js/maskedinput-1.4.1.js"></script> 
        <script src="../js/jquery.validate.js"></script> 
        
        <script>
            $(document).ready(function(){
                $('#cpf').mask("999.999.999-99");
                $('#telefone').mask("(99)99999-9999");


                $.mask.definitions['h'] = "[A-Z0-9]";
                $('#oab').mask("hh-hhhhhh");

                $('form').validate();

            });
        </script>

  </body>
</html>