<?php  

include('protect.php');
include('conexao.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../PosLogin/PosLogin.css'>
   <link rel = 'stylesheet' type = 'text/css' media='screen' href='../css/bootstrap.min.css'>
   <script src='../js/bootstrap.bundle.min.js'></script>

    <title>MyFinder</title>
</head>
<body>
    <!-- Nome do site-->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            MyFinder
          </a>
          
          
          <button class="btn btn-outline-dark" id="btnCadastro" onclick="window.location.href = '../login/logout.php'">Logout</button>
        </div>
      </nav>
      <!--fim do nome do site-->

      <!--MENU de navegação-->
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="../login/posLogin.php">Principal</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="MeusProdutos.php">Meus Produtos</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../Configuraçoes/configuracoes.html">Configurações</a>
                  </li>
                 
                </ul>

                <!--Navegção-->
                <div class=""box-search>
                <form class="d-flex" role="search" method="POST">
                  <input class="form-control me-2"  type="search" placeholder="Pesquisar..." name="pesquisar" id="pesquisar" aria-label="Search">
                  <button oncclick="searchData()" class="btn btn-outline-dark" type="submit">Pesquisar</button>
                </form>
                
              </div>
              </div>
            </div>
          </nav>

         
          <!--Fim do menu-->


        <!--Imagem de ofertas e promoções-->    
        <section id = "oferta">
            <div id = "ofertas">
                <img src="../imagens/ofertas.png" allign = "middle"/>
              </div>
        </section>
        <!--Fim da imagem-->
        <?php
          if(!isset($_POST['pesquisar'])){
            ?>
            <tr>
              <td colspan="3">Digite algo para pesquisar...</td>
            </tr>
            <?php 
          } else{

            $pesquisa = mysqli_real_escape_string ($conexao,trim($_POST['pesquisar']));
            $sql_code = "SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%'";

           $sql_query = $conexao->query($sql_code) or die("Falha na execução do banco de dados" . $conexao->error);

            if($sql_query->num_rows == 0){
          ?>
           <tr>
              <td colspan="3">Nenhum resultado encontrado...</td>
            </tr>
            <?php }
            else{
              while($dados = $sql_query->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $dados['nome'];?></td>
                </tr>
                <?php
              }
            }
            ?>
          
          <?php } ?>


   
</body>

</html>