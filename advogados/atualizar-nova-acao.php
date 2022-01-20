<?php 
    include '../conexao.php';

    include '../autenticacao.php';

    //Processo de atualização em banco de dados
    //1- Resgatar os dados do form

    $proc = $_GET["proc"]; 
    $oab = $_GET["adv"];
    
    //2- Conectar o PHP ao MYSQL
    //endereço, usuario, senha, nome da base

    
    //3- Montar a instrução sql de atualização
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
      <h3>Atualizar ação</h3>
        </div>
        <br><br><br>

        <form action="regravado.php" METHOD="GET">


        <div class="row">
          <div class="col s2">
                <label>Andamento:</label>
                <input type="text" id="anda" name="anda" required>
        </div>
            <div class="col s3">
                <label>Tradução:</label>
                <input type="text" id="trad" name="trad" required>
        </div>
         <div class="col s2">
                <label>Descrição:</label>
                <textarea id="descr" name="descr" maxlength="200" style="background-color: white;" required > </textarea>
        </div>
             <div class="col s3" >
               <label>Status:</label>

                <select name="status" class="browser-default ">
                  <option value="" disabled selected>Selecione o atual</option>
                  <option value="Em andamento" >Em andamento</option>
                  <option value="Pendencia">Pendencia</option>
                  <option value="Solicitações enviadas!">Solicitações enviadas!</option>
                  <option value="Cancelado">Cancelado</option>
                  <option value="Concluído">Concluído</option>

                </select>
              </div>
              


         
                <input type="text" value="<?php echo $proc; ?>" id="proc" name="proc" hidden>
                <input type="text" value="<?php echo $oab; ?>" id="oab" name="oab" hidden>

          <div class="col s2">
            <br>
                <input type="submit" value="Atualizar" class="btn grey">
        </div>
        </div>
        </form>

    </div>
        

      

        



     <script src="materialize/js/materialize.min.js">   </script>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script> 
        <script src="js/maskedinput-1.4.1.js"></script> 
        <script src="js/jquery.validate.js"></script> 
        
 

  </body>
</html>


