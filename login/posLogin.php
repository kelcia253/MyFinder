<?php  

include('protect.php');
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

      <!--MENU de notificação-->
          <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="../TelaInicial/TelaInicial.html">Principal</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../MeusProdutos/MeusProdutos.html">Meus Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../Configuraçoes/configuracoes.html">Configurações</a>
                  </li>
                 
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                  <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
                </form>
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

    <p>
        <a href="../login/logout.php">Sair</a>
       
    </p>
</body>
</html>