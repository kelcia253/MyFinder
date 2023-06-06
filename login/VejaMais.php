<?php
session_start();
include("conexao.php");

if (isset($_POST['botaoId'])) {
    $id_produtos = $_POST['id_produtos'];

    // Estabelecer a conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "myfinder");

    // Verificar se a conexão foi estabelecida com sucesso
    if (mysqli_connect_errno()) {
        echo "Falha na conexão com o banco de dados: " . mysqli_connect_error();
        exit();
    }

    // Preparar a consulta SQL
    $sql_code = "SELECT * FROM produtos WHERE id_produtos = '$id_produtos'";
    
 
   

    // Executar a consulta SQL
    $resultado = mysqli_query($conexao, $sql_code);


    // Verificar se a consulta foi executada com sucesso
    if ($resultado) {
        // Verificar se foram encontrados registros
        if (mysqli_num_rows($resultado) > 0) {
            // Loop para processar cada registro retornado pela consulta
            while ($row = mysqli_fetch_assoc($resultado)) {
                // Acessar os valores retornados do banco de dados
                $id = $row['id_produtos'];
                $nome = $row['nome'];
                $preco  = $row['preco'];
                $descricao = $row['descricao'];
                $link = $row['link'];
                $imagem = $row['imagem'];

                // Realizar qualquer ação necessária com os valores obtidos
            }
        } else {
            echo "Nenhum registro encontrado.";
        }
    } else {
        echo "Erro na execução da consulta: " . mysqli_error($conexao);
    }

   

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veja Mais</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./VejaMais.css">
</head>

<body>
<h1><?php echo " " . $nome . "<br>";?></h1>
<hr>

<div class="veja">
  <div class="img">
  <img class="imgVeja" src="<?php echo $imagem; ?>" alt="Imagem do produto">
  </div>
  <div class="info-produto">
    <h5>Preço: </h5> 
    <p><?php  echo $preco ?></p>
    <h5>Descrição: </h5>
    <p><?php echo $descricao; ?></p>

    <div class="botoes-produto">
    <div class="flex-item">
      <a href="<?php echo $link; ?>" class="btn btn-lg btn-dark btn-block" target="_blank">Visitar</a>
    </div>
    <div class="flex-item">
                <form method="POST" action="tela_edit.php">
                    <input type="hidden" name="id_produtos" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-lg btn-dark btn-block">Editar</button>
                    
                </form>
</div>
<div class="flex-item">
                <form method="POST" action="RemoverProduto.php">
                    <input type="hidden" name="id_produtos" value="<?php echo $id; ?>">
                    <button type="submit" class="btn btn-lg btn-dark btn-block">Remover</button>
                    
                </form>
</div>
            </div>
        </div>
    </div>

    <?php 

 //$pesquisa = mysqli_real_escape_string ($conexao,trim($_POST['titulo']));

    
    
    
    
    
    
    
    ?>

</body>

</html>