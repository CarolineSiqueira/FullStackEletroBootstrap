<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Pedidos - Full Stack Eletro</title>
        <link rel="stylesheet"  href="./css/estilo.css">
        <script src="js/funcoes.js"></script>
    </head>
    <body>
        <!--Menu-->        
        <?php
        include_once('menu.html');
        ?>
        <!--Fim de menu-->


<body>

<br><br><br>
<br><br><br>
 


         <div  class="container">
        <div class="row">
           <div class="col-4 mx-auto pt-4 container-login">
               <h3 class="mb-4">Fazer Pedido</h3>       
               <form method="POST" role="form" action="">
                  <div class="form-group-sm">           
                    <label class="label-form" for="nome_cliente">Nome:</label>
                    <input class="form-control" type="text" name="nome_cliente" id="nome_cliente" placeholder="Nome completo"  onkeyup="validar()">
                  </div> 

                  <div class="form-group-sm">           
                    <label class="label-form" for="endereco">Endereco:</label>
                    <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Rua nº,Bairro,Cidade-UF"  onkeyup="validar()">                   
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="telefone">Telefone:</label>
                    <input class="form-control" type="text" name="telefone" id="telefone"  placeholder="(00) 00000-0000" onkeyup="validar()">
                  </div>
                  
                  <div class="form-group-sm">           
                    <label class="label-form" for="nome_produto">Produto:</label>
                    <input class="form-control" type="text" name="nome_produto" id="nome_produto"  placeholder="Descrição do produto"  onkeyup="validar()">
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="quantidade">Quantidade:</label>
                    <input class="form-control" type="text" name="quantidade" id="quantidade"  onkeyup="validar()">
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="valor_unitario">Valor:</label>
                    <input class="form-control" type="text" name="valor_unitario" id="valor_unitario"  placeholder="Valor de cada produto..." onkeyup="validar()">
                  </div> 

                  <div class="form-group-sm">           
                    <label class="label-form" for="valor_total">Total:</label>
                    <input class="form-control" type="text" name="valor_total" id="valor_total"  placeholder="Valor total" onkeyup="validar()">
                  </div> 

                  <br>  
                  
                  <button type="submit" name="enviar" class="btn btn-success mb-4" id="enviar_denuncia"> Enviar </button>
                  
               </form>
   
            </div>
         </div>
      </div>

        <?php

           $servername="localhost";
           $username="root";
           $password="";
           $database="fseletro";

           $conn = mysqli_connect($servername,$username,$password,$database);

           
 
           if(isset($_POST['nome_cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['nome_produto']) && isset($_POST['quantidade']) && isset($_POST['valor_unitario'])&& isset($_POST['valor_total'])){
              $nome_cliente = $_POST["nome_cliente"];
              $endereco = $_POST["endereco"];
              $telefone = $_POST["telefone"];
              $nome_produto = $_POST["nome_produto"];
              $quantidade = $_POST["quantidade"];
              $valor_unitario = $_POST["valor_unitario"];
              $valor_total = $_POST["valor_total"];

   
            $sql = "insert into tb_pedidos (nome_cliente,endereco,telefone,nome_produto,quantidade,valor_unitario,valor_total) values ('$nome_cliente','$endereco','$telefone','$nome_produto','$quantidade','$valor_unitario','$valor_total')";

            $result = $conn->query($sql);

            if($result){
                echo "Dados inseridos com sucesso!";
            }
          
        }


        ?> 

         <footer id="rodape"> 
            <h4>Formas de pagamento</h4>
            <img src="./Imagem/forma de pagamento.html" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>

         </footer>



</body>


</html>

