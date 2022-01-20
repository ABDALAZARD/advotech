<?php
 include_once "../autenticacao.php";   

?>
<!DOCTYPE html>
  <head>
    <title>ADM</title>
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
              
              margin-left:200px;

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
      <h3>Configurações</h3>
        </div>
  

      <br><br>
      <div class="menu">

        <form action="atualizar-senha.php" METHOD="POST">
           <div class="row">
            <div class="col s3">
            <table>Senha</table>
          <input type="password" name="senha">
          

          <input type="submit" value="Atualizar" class="grey btn">
        </div>

      </div>
        </form>

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