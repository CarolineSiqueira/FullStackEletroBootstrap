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
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet"  href="./css/estilo.css">
        <script src="js/funcoes.js"></script>
    </head>
    <body>
        <!--Menu-->        
        <?php
        include_once('menu.html');
        ?>
        <!--Fim de menu-->

        <header>
        <h2>Produtos</h2>
        </header>
        <hr>

        
        <div class="container pt-3">
             
              <h3>Categorias</h3>
            <ul>
                <li onclick="exibir_todos()">Todos(12)</li>
                <li onclick="exibir_categoria('geladeira')">Geladeiras(3)</li>
                <li onclick="exibir_categoria('fogao')">Fogões(3)</li>
                <li onclick="exibir_categoria('microondas')">Microondas(2)</li>
                <li onclick="exibir_categoria('lavaloucas')">Lava-louças(2)</li>
                <li onclick="exibir_categoria('lavadouraderoupas')">Lavadoura de Roupas(2)</li>
            </ul>
        </div>
        

            <div class="container">   
        
            <?php

                $sql = "select * from tb_produtos";
                $result = $conn->query($sql);
              
                if($result->num_rows > 0){
                    while($rows = $result->fetch_assoc()){
                        

            ?>

                  
                <div class="produtos" id=<?php echo $rows["categoria"]; ?> >
                     <img src="<?php echo $rows["imagem"]; ?>" width="180px" onclick="destaque(this)"> 
                     <br>
                     <p ><?php echo $rows["descricao"]; ?></p>
                     <hr>
                     <p ><strike>R$<?php echo $rows["preco"]; ?></strike></p>    
                     <p class="text-danger"><strong>R$<?php echo $rows["precofinal"]; ?></strong></p>
                     <button class="btn btn-dark" onclick="copiar(this)"><a href="pedidos.php">Comprar</a></button>
                </div>  
               
            </div>
            
            <?php
                   }
               }else {
                  echo "Nenhum produto cadastrado!";
              }
              
            ?>           
               

        <br><br><br><br><br>
        <br><br><br><br><br>
    
      
       
         <footer id="rodape"> 
            <h4>Formas de pagamento</h4>
            <img src="./Imagem/forma de pagamento.html" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>

         </footer>
      
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
   

    
    </body>
</html>