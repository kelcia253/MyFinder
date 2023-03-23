

<?php
include('conexao.php');

if(isset($_GET['id'])) {
  // obtém o ID do produto do parâmetro GET
  $id_produtos = $_GET['id'];

  // consulta para selecionar o produto com o ID especificado
  $query = "SELECT * FROM produtos WHERE id_produto = $id_produtos LIMIT 1";

  // executa a consulta e obtém o resultado
  $resultado = mysqli_query($conexao, $query);

  // verifica se a consulta retornou algum resultado
  if(mysqli_num_rows($resultado) > 0) {
    // exibe as informações do produto
    $produto = mysqli_fetch_assoc($resultado);
    echo "Nome do produto: " . $produtos['nome'] . "<br>";
    echo "Descrição do produto: " . $produtos['descricao'] . "<br>";
    echo "Link do produto: " . $produtos['link'] . "<br>";
  } else {
    echo "Produto não encontrado.";
  }

  // fecha a conexão com o banco de dados
  mysqli_close($conexao);
} else {
  echo "ID do produto não informado.";
}
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
  
 
 


      <!--Cards-->


<table>
 <tr>

         <td>
        <div class="card" style="width: 18rem;" name="card">
        <div class="card text-center">
          <div class="card-header" name="titulo" id="titulo" method="POST">
          <?php echo $dados['nome']?>
          </div>
          <div class="card-body">
            <p class="card-text"><?php echo $dados['descricao']?></p>
            <a href="<?php echo $dados['link']?>" class="btn btn-primary" target="_blank">Visitar</a>
            <button class="btn btn-primary" type="button"  onclick="window.location.href = '../login/VejaMais.php'">Veja Mais</button> 
          </div>
        </div>
         
        </td>
        <style>
        .card-text {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  </style>

      
  
      </table>
</body>
</html>