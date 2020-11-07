<?php

$servername="localhost";
$username="root";
$password="";
$database="fseletro";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("A conexão ao BD falhou:". mysqli_connect_error());
}


if(isset($_POST['nome']) && isset($_POST['mensagem'])){
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

   
    $sql = "insert into tb_comentarios (nome,mensagem) values ('$nome','$mensagem')";
    $result = $conn->query($sql);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html');
        ?>
        <!--Fim de menu-->

        <h2>Contato</h2>
        <hr>

        <div class="container">
             <div class="row">
                  <div class="col-sm">
                  <img src="Imagem/Email.png"width="35%"><br>
                  <strong>Nosso e-mail:<br>
                  Fullstackeletro@gmail.com
                  </strong>
                  </div>          
        
                  
                  <div class="col-sm">
                  <img src="Imagem/Whatsapp.png" width="35%"><br>
                  <strong>Entre em contato pelo Whatsapp:<br>
                  (21)98888-7777
                  </strong>
                  </div>
             </div>
        </div>

      

        <br><br><br>
        <br><br><br>
      

        <div  class="container">
        <div class="row">
           <div class="col-4 mx-auto pt-4">
               <h3 class="mb-4">Mensagem</h3>       
               <form metho="POST" action="">
                  <div class="form-group-sm">           
                    <label class="label-form" for="email">Nome:</label>
                    <input class="form-control" type="text" id="nome"  placeholder="Seu Nome">
                  </div>  

                  <div class="form-group-sm">           
                    <label class="label-form" for="mensagem">Mensagem:</label>
                    <input class="form-control" type="mensagem" id="senha"  placeholder="Deixe seu comentário...">
                  </div>   
                  <br>             
          
                  <button type="submit" name="submit" class="btn btn-primary mb-4"> Enviar </button>
                  
               </form>
   











       
       <br>
       <br>
       <br>
       <footer id="rodape"> 
           <h4 id="formasdepagamento">Formas de pagamento</h4>
           <img src="./Imagem/forma de pagamento.html" alt="Formas de pagamento">
           <p>&copy; Recode Pro</p>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    </body>
</html>

