<?php
include('conexao.php');

/*
if(isset($_POST['botaoId'])){
  session_start();
  $minha_variavel = $_POST['id_produtos2'];
  echo "estou aqui ".$_POST['id_produtos2'];
  $_SESSION['minha_variavel'] = $minha_variavel; 
}
*/


?>







<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MyFinder</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='MeusProdutos.css'>
    <link rel = 'stylesheet' type = 'text/css' media='screen' href='../css/bootstrap.min.css'>
    <script src='../js/bootstrap.bundle.min.js'></script>
    <script src='main.js'></script>
</head>
<body>
   <!-- Nome do site-->
   <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        MyFinder
      </a>
    </div>
  </nav>
  <!--fim do nome do site-->
  
 
  <!--MENU de notificação-->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="../login/posLogin.php">Principal</a>
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
              <input class="form-control me-2" type="search" name="pesquisar" placeholder="Pesquisar..." aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
            </form>
          </div>
        </div>
      </nav>
      <!--Fim do menu-->


      <!--Cards-->
</br>
<button class="btn btn-primary" type="button"  onclick="window.location.href = '../login/NovoProduto.php'">Adicionar Produto</button> 

<br>
<br>

<table>
 <tr>

<?php
      //$pesquisa = mysqli_real_escape_string ($conexao,trim($_POST['titulo']));
      $sql_code = "SELECT * FROM produtos";
      $sql_query = $conexao->query($sql_code) or die("Falha na execução do banco de dados" . $conexao->error);
      
      $cont = 0;
      
      while($dados = $sql_query->fetch_assoc()){
        $cont++;
        ?>
        <form action="VejaMais.php" method="POST">
        <td>
          <div class="card" style="width: 18rem;" name="card">
            <div class="card text-center">
              <div class="card-header" name="titulo" id="titulo" method="POST">
                <?php echo $dados['nome']?>
              </div>
              <div class="card-body">
                <p class="card-text"><?php echo $dados['descricao']?></p>
                <a href="<?php echo $dados['link']?>" class="btn btn-Lg btn-dark btn-block" target="_blank">Visitar</a>
      
              
                
                  <?php
                    $id_produtos2 = $dados['id_produtos'];
                    //echo"oi".$id_produtos2;
                  ?>
                  <input type="text" class="form-control" name="id_produtos" value="<?php echo $id_produtos2 ?>" hidden>
                  <button class="btn btn-Lg btn-dark btn-block" type="submit" name="botaoId">Veja Mais</button>
          
                

              </div>
            </div>
          </div>     
        </td>
        </form>
        <style>
          .card-text {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
          }
        </style>
      
        <?php 
        if($cont == 6){
          $cont = 0;
          ?>
          </tr>
          <tr>
          <?php 
        }
      } 
      ?>
      


 
  
      </table>
     
</body>
</html>