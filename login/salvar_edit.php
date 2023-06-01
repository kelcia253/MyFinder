<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obter os dados enviados do formulário
  $id_produtos = mysqli_real_escape_string($conexao, $_POST['id_produtos']);
  $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
  $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
  $link = mysqli_real_escape_string($conexao, $_POST['link']);
  $preco = mysqli_real_escape_string($conexao, $_POST['preco']);
  $imagem = mysqli_real_escape_string($conexao, $_POST['imagem']);

  // Atualizar os dados do produto no banco de dados usando uma instrução preparada
  $sql = "UPDATE produtos SET nome=?, descricao=?, link=?, preco=?, imagem=? WHERE id_produtos=?";
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("sssisi", $nome, $descricao, $link, $preco, $imagem, $id_produtos);
  $stmt->execute();

  // Redirecionar para o arquivo "MeusProdutos.php" após salvar as alterações
  header("Location: MeusProdutos.php");
  exit();
}
?>
