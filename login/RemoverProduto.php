
<?php
include('protect.php');

require_once ('conexao.php');

// Verificar se foi fornecido um valor para 'relato_id'
if (isset($_POST['id_produtos'])) {
  $relato_id = mysqli_real_escape_string($conexao, $_POST['id_produtos']);

  $sql = "DELETE FROM produtos WHERE id_produtos = ?";
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("i", $relato_id);
  
  if ($stmt->execute()) {
    

    ?>
    <div class="alert alert-success"><p><?php  echo "Produto excluído com sucesso!";?>
    <br>
<a href="./MeusProdutos.php">Voltar aos Meus produtos</a>
</p>

</div>
    <?php
  } else {
    ?>
    <div class="alert alert-danger"><p><?php echo "Erro ao excluir o produto: " . $stmt->error;?></p></div>
    <?php
  }

  $stmt->close();
  $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

</body>
</html>


