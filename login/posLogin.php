<?php  

include('protect.php');
include('conexao.php');








?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MyFinder</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='posLogin.css'>
   <link rel = 'stylesheet' type = 'text/css' media='screen' href='../css/bootstrap.min.css'>
   <script src='../js/bootstrap.bundle.min.js'></script>


    <script src='main.js'></script>
</head>
<body>
  <!-- Nome do site-->
  
    <nav class="navbar bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            MyFinder
          </a>
          <div class="btnPrincipal">
          <button class="glow-on-hover"  id="btnLogin" onclick="window.location.href = '../login/Login.php'" style=" float: rigth">Logout</button>
        
        </div>
        </div>
      </nav>
      <!--fim do nome do site-->

      <!--MENU de notificação-->
          <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="../TelaInicial/TelaInicial.html">Principal</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active meu-produto" aria-current="page" href="../login/MeusProdutos.php">Meus Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active configuracoes" aria-current="page" href="../Configuraçoes/configuracoes.php">Configurações</a>
                  </li>
                 
                </ul>

               


              </div>
            </div>
          </nav>
          <div class="bg-dark" style="height: 300px">
            <section id = "oferta">
              <div class="box-search bg-dark">
                <form class="d-flex justify-content-center" role="search" method="POST">

                
                  <input  class="form-control me-2 pesquisa"  type="search" placeholder="Pesquisar..." name="pesquisar" id="pesquisar" aria-label="Search">
                  <button  onclick="searchData()" class="btn btn-outline-light botao" type="submit">Pesquisar</button>
              
                </form>
                
              </div>
          </section>
          </div>
          
          
          <!--Fim do menu-->


        <!--Imagem de ofertas e promoções    
        <section id = "oferta">
            <div id = "ofertas">
                <img src="../imagens/ofertas.png" allign = "middle"/>
              </div>
        </section>
        Fim da imagem-->


</body>

</html>