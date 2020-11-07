<?php

$servername="localhost";
$username="root";
$password="";
$database="fseletro";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("A conexão ao BD falhou:". mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <title>Full stack Eletro</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    
    <body>
        <!--Menu-->
        <?php
        include_once('menu.html');
        ?>       
        <!--Fim de menu-->

        <div class="container">
           <h1>Seja bem vindo(a)!</h1>
           <p>Aqui em nossa loja,<strong>programadores</strong> tem desconto!</p>
        </div>   

       <br><br><br><br><br>
       <br><br><br><br><br>
       <br><br><br><br><br>
       <br><br><br><br><br>
          
       <footer id="rodape"> 
          <h4 id="formasdepagamento">Formas de pagamento</h4>
          <img src="./Imagem/forma de pagamento.html" alt="Formas de pagamento">
          <p>&copy; Recode Pro</p>
       </footer>

</body>
</html>